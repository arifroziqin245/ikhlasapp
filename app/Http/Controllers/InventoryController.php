<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Satuan;
use Illuminate\Http\Request;
use App\Http\Controllers\categoryController;
use App\Models\DetilOrder;
use App\Models\History;
use App\Models\Order;
use Illuminate\Foundation\Console\ViewCacheCommand;
use Illuminate\Support\Facades\Validator;

class InventoryController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 2) {
            return redirect('/sales');
        }elseif(auth()->user()->role == 3){
            return redirect('/boss');
        }else{
            return view('admin.inventory', [
                'active' => 'inventory',
                'title' => "Inventory",
                'inventory' => Inventory::orderBy('nama_barang', 'ASC')->get(),
                'category' => Category::orderBy('nama_category', 'ASC')->get(),
                'satuan' => Satuan::all()
            ]);
        }
    }
    public function change(){
        $today = date('Y-m-d', strtotime('+1 day'));
        $to = date('Y-m-d', strtotime('-30 days'));
        $limit = History::orderBy('created_at','DESC')->whereBetween('created_at', [$to, $today])->orderBy('created_at', 'desc')->get();
        return view('admin/change',[
            'active' => "change",
            "title" => "Data Perubahan",
            'history' =>  $limit,
            'category' => Category::all()
        ]);
    }

    public function invenBoss(){
        return view('bos.inventory', [
            'active' => 'inventoryb',
            'title' => "Inventorybgh",
            'inventory' => Inventory::orderBy('nama_barang', 'ASC')->get(),
            'category' => Category::orderBy('nama_category', 'ASC')->get(),
            'satuan' => Satuan::all()
        ]);
    }

    public function order()
    {
        $today = date('Y-m-d', strtotime('+1 day'));
        $to = date('Y-m-d', strtotime('-4 days'));
        return view('admin.order', [
            'active'=>'order',
            'title' => "Laporan Order",
            'lok' => date('d F Y', strtotime('-1 day')),
            'order_all' => Order::where('status_order', 1)->whereBetween('created_at', [$to, $today])->orderBy('created_at', 'desc')->get(),
            'order' => Order::where('status_order', 0)->whereBetween('created_at', [$to, $today])->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function orderBoss()
    {
        return view('bos.order', [
            'active'=>'orderb',
            'title' => "Laporan Order",
            'lok' => date('d F Y', strtotime('-1 day')),
            'order_all' => Order::where('status_order', 1)->get(),
            'order' => Order::where('status_order', 0)->get(),
        ]);
    }

    public function print($id)
    {
        return view ('admin.print', [
            'active' => 'order',
            'title' => "Print Nota",
            'order' => Order::find($id),
            'detail_order' => DetilOrder::where('id_order', $id)->orderBy('created_at','desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.create',
        [
            'active' => 'inventory',
            'title' => "Create Inventory",
            'category' => Category::all(),
            'satuan' => Satuan::all()
        ]);
    }
    public function tambah()
    {
        return view('admin.create',
        [
            'active' => 'inventory',
            'category' => Category::all(),
            'satuan' => Satuan::all()
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama_barang' =>'required|max:255',
            'category'  => 'required|',
            'harga'=> 'required',
            'satuan'  => 'required',
            'isi'  => 'required'
        ]);

        $nama = $request->nama_barang; // digunakan untuk nilai untuk melooping
        foreach ($nama as $key => $value) {
            Inventory::create([
                'nama_barang' => $request->nama_barang[$key],
                'category' => $request->category[$key],
                'harga' => $request->harga[$key],
                'satuan' => $request->satuan[$key],
                'isi' => $request->isi[$key],
                'harga_satuan' => ceil($request->harga[$key]/$request->isi[$key])
            ]);

            History::create([
                'nama_barang' => $request->nama_barang[$key],
                'harga_lama' => $request->harga[$key],
                'harga_baru' => $request->harga[$key],
                'satuan' => $request->satuan[$key],
                'isi' => $request->isi[$key],
                'status' => '1'
            ]);
        }

        // Inventory::create($validatedData);
        return redirect('/inventory')->with('success', 'New List Added Successfully!');

    }

    public function show($id)
    {
        return view('admin.detil', [
            "title" => "Detil Item",
            'active' => 'inventory',
            "inven" => Inventory::find($id)
        ]);
    }

    public function edit($id)
    {
        $query = Inventory::findOrFail($id);
        if($query){
            return response([
                'active' => 'inventory',
                "title" => "Edit Inventory",
                'status' => 200,
                'data' => $query
            ]);
        }  else {
            return response([
                'status' => 404,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'nama_barang' =>'required|max:255',
            'category' => 'required',
            'harga'=> 'required',
            'satuan' => 'required',
            'isi'  => 'required',
        ]);

        if($validate->fails()) {
            return response()->json([
                'status' => 404,
                'errors'  => $validate->errors()->all(),
            ]);
        }else{
            $inven = Inventory::find($id);

            $harga_lama = $inven->harga;

            $inven->nama_barang = $request->nama_barang;
            $inven->category = $request->category;
            $inven->harga = $request->harga;
            $inven->satuan = $request->satuan;
            $inven->isi = $request->isi;
            $inven->status_barang = $request->status_barang;
            $inven->harga_satuan = $request->harga / $request->isi;
            $inven->update();

            History::create([
                'nama_barang' => $request->nama_barang,
                'harga_lama' => $harga_lama,
                'harga_baru' => $request->harga,
                'satuan' => $request->satuan,
                'isi' => $request->isi,
                'status' => '2'
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Data berhasil di ubah'
            ]);
        }

        // $validate = $request->validate([
        //     'nama_barang' =>'required',
        //     'category' => 'required',
        //     'harga' => 'required',
        //     'satuan'  => 'required',
        //     'isi'  => 'required',
        //     'status_barang' => 'required'
        // ]);

        // $validate['harga_satuan'] = $request->harga / $request->isi;
        // Inventory::where('id', $id)->update($validate);

        // return response()->json([
        //     'status' => 200,
        //     'message' => 'Data berhasil di ubah'
        // ]);
    }

    public function detail_order($id){
        return view('admin.detail_order', [
            'active' => 'order',
            "title" => "Detail Order",
            'order' => Order::find($id),
            'detail_order' => DetilOrder::where('id_order', $id)->whereNotIn('proses', [1])->get(),
        ]);
    }

    public function seleksi_order(Request $request, $id){

        $nama = $request->status_order; 
        foreach ($nama as $key => $value){
            $detail_order = DetilOrder::find($value);
            $detail_order->proses = "1";
            $detail_order->update();
        }

        $orderall = DetilOrder::where('id_order', $id)->count(); // jumlah total barang
        $ordercentang = DetilOrder::where('id_order', $id)->where('proses', 1)->count(); // jumlah total barang yang dicentang

        if($orderall == $ordercentang){
            $order = Order::find($id);
            $order->status_order = 1;
            $order->update();
        }

        return redirect('/order');
    }

    public function setOrder(){
        $order = DetilOrder::find(request('status_order'));
        $order->proses = request('proses');
        $order->update();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil diubah'
        ]);
    }
    public function destroy(Inventory $inventory)
    {
        History::create([
            'nama_barang' => $inventory->nama_barang,
            'harga_lama' => $inventory->harga,
            'harga_baru' => $inventory->harga,
            'satuan' => $inventory->satuan,
            'isi' => $inventory->isi,
            'status' => '3'
        ]);
        $inventory->delete();
        return redirect('/')->with('success', 'Data has been deleted!');
    }
    
    
    public function hapusOrder(DetilOrder $id)
    {
        $idorder = request('idglobal');
        DetilOrder::destroy($id->id);
        return redirect('/admin/detail_order/'.$idorder)->with('success', 'Data has been deleted!');
    }

    public function tambahGambar(Request $request, $id){
        // dd(request());
        $inven = Inventory::find($id);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('Gambar_upload/barang/', $request->file('gambar')->getClientOriginalName());
        }

        $inven->gambar = $request->file('gambar')->getClientOriginalName();
        $inven->update();
        return redirect('/inventory/'.$id);
    }

    public function json(){
        $columns = ['id','nama_barang','category', 'harga', 'satuan', 'isi', 'status_barang', 'gambar'];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = Inventory::select('id','nama_barang','category', 'harga', 'satuan', 'isi', 'status_barang', 'gambar');

        if(request()->input("search.value")){
            $data = $data->where(function($query){
                $query->whereRaw('nama_hewan like ? ', ['%'.request()->input("search.value").'%'])
                ->orWhereRaw('keterangan like ? ', ['%'.request()->input("search.value").'%']);
            });
        }

        $recordsFiltered = $data->get()->count();
        if(request()->input('length') == -1){
            $data = $data->orderBy($orderBy,request()->input("order.0.dir"))->get();
        }else{
            $data = $data->skip(request()->input('start'))->take(request()->input('length'))->orderBy($orderBy,request()->input("order.0.dir"))->get();
        }
        $recordsTotal = $data->count();

        return response()->json([
            'draw' => request()->input('draw'),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ]);
    }
}
