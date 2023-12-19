<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\DetilOrder;
use App\Models\Inventory;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function index()
    {

        $kesesi = Customer::where('lokasi_cust', 'kesesi')->get();
        $doro = Customer::where('lokasi_cust', 'Doro')->get();
        $kdwdankry = Customer::where('lokasi_cust', 'Karanganyar')->orWhere('lokasi_cust', 'Kedungwuni')->orWhere('lokasi_cust', 'Wonopringgo')->orWhere('lokasi_cust', 'Banyurip')->get();
        $bjgSrg = Customer::where('lokasi_cust', 'Bojong')->orWhere('lokasi_cust', 'Sragi')->get();
        $pemalang = Customer::where('lokasi_cust', 'Comal')->orWhere('lokasi_cust', 'Pemalang')->get();
        $paninggaran = Customer::where('lokasi_cust', 'Paninggaran')->orWhere('lokasi_cust', 'Paninggaran')->get();


        return view('sales.indexAwal',[
            'title' => 'Sales Ikhlas',
            'active' => 'orderbr',
            'inventory' => Inventory::orderBy('nama_barang', 'ASC')->get(),
            'category' => Category::all(),
            'doro' => $doro,
            'kdwdankry' => $kdwdankry,
            'kesesi' => $kesesi,
            'bojong' => $bjgSrg,
            'pemalang' => $pemalang,
            'paninggaran' => $paninggaran,
        ]);
    }

    public function form_sales($id)
    {
        return view('sales.index',[
            "title" => "Form Input Data Order",
            'active' => 'orderbr',
            "customer" => Customer::find($id),
            "inventory" => Inventory::orderBy('nama_barang', 'ASC')->get(),
            "category" => Category::all(),
        ]);
    }
    
    public function list()
    {
        $today = date('Y-m-d', strtotime('+1 day'));
        $to = date('Y-m-d', strtotime('-4 days'));
        $order = Order::where('status_order', 0)->whereBetween('created_at', [$to, $today])->orderBy('created_at', 'desc')->get();
        // dd($order);
        return view('sales.list_order',[
            'active' => 'list',
            'title' => 'List Order',
            'inventory' => Inventory::all(),
            'order' => $order,
            // 'order' => DB::table('orders')->select('*')->groupBy('nama_cust')->get()
            // 'detail' => DB::table('detil_orders')->select('*')->groupBy('id_order')->get()
        ]);
    }

    public function nota()
    {
        $today = date('Y-m-d');
        $to = date('Y-m-d', strtotime('-4 days'));
        $data =  Order::where('status_order', 1)->whereDate('updated_at', date('Y-m-d'))->get();

        return view('sales.nota',[
            'active' => 'nota',
            'title' => 'Nota',
            'order' => Order::where('status_order', 1)->whereBetween('created_at', [$to, $today])->get(),
            // 'order' => DB::table('orders')->select('*')->groupBy('nama_cust')->get()
            // 'detail' => DB::table('detil_orders')->select('*')->groupBy('id_order')->get()
        ]);
    }

    public function getDetail($id){

        $detail = DetilOrder::where('id_order', $id)->get();
        if ($detail) {
            return response()->json([
                'status' => 200,
                'data' => $detail
            ]);
        } else {
            return response()->json([
                'status' => 401,
                'errors' => "Data tidak ditemukan"
            ]);
        }
    }

    public function ambilbarang($id){
        $barang =Inventory::find($id);

        if ($barang) {
            return response()->json([
                'status' => 200,
                'data' => $barang
            ]);
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Barang tidak ditemukan'
            ]);
            
        } 
    }
    
    public function ambildatabarang(Request $request, $id){
        $barang =Inventory::find($id);
        $bijian = $request->bijian;
        $tertentu = $request->tertentu;
        
        if($bijian == null){
            $harga = $barang->harga;
            $jumlah = $tertentu;
            $satuan = $barang->satuan;
        }else{
            $harga = $barang->harga_satuan;
            $jumlah = $bijian;
            $satuan = "Pcs";
        }
        $total = $harga*$jumlah;
        
        $datas[] = [
            'id' => $barang->id,
            'nama_barang' => $barang->nama_barang,
            'category' => $barang->category,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'satuan' => $satuan,
            'total' => $total,
            'keterangan' => $request->keterangan,
        ];
        
        if ($barang) {
            return response()->json([
                'status' => 200,
                'barang' => $datas
            ]);
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Barang tidak ditemukan'
            ]);
            
        }   
    }

    public function store_tambah(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'nama_barang' =>'required|max:255',
            'id_order'=> 'required',
            'harga'=> 'required',
            'harga_satuan'=> 'required',
            'satuan'  => 'required',
        ]);

        if($request->bijian == null){
            $jumlah = $request->tertentu;
            $harga = $request->harga;
        }else{
            $jumlah = $request->bijian;
            $harga = $request->harga_satuan;
        }

        $order = Order::find($request->id_order);
        $total_order = $order->total;
        $order->total = $total_order+$harga*$jumlah;
        $order->update();

        DetilOrder::create([
            'id_order' => $request->id_order,
            'nama_barang'=>$request->nama_barang,
            'category'=>"ATSK",
            'jumlah'=>$jumlah,
            'satuan'=>$request->satuan,
            'harga'=>$harga,
            'total'=>$harga*$jumlah,
        ]);
        return redirect('/sl')->with('success', 'List orderan baru berhasil ditambahkan!!');
    }

    public function store(Request $request)
    {
        $rules = $request->validate([
            'nm_barang' => 'required'
        ]);
        
        $jumlah_item = count($request->nm_barang);

        $order = new Order();
        $order->nama_custs = $request->nama_customer;
        $order->lokasi_cust = $request->lokasi_cust;
        $order->jumlah_item = $jumlah_item;
        $order->total = $request->grand_total;
        // $order->dp = "10000";
        $order->save();

        $id = $order->id; // mengambil data id ketika ada yang disimpan

        foreach ($request->nm_barang as $key => $value) {
            DetilOrder::create([
                'id_order' => $id,
                'nama_barang'=>$request->nm_barang[$key],
                'category'=>$request->category_brg[$key],
                'jumlah'=>$request->jumlah[$key],
                'satuan'=>$request->satuan_list[$key],
                'harga'=>$request->harga[$key],
                'total'=>$request->harga[$key]*$request->jumlah[$key],
            ]);
        }
        return redirect('/sl')->with('success', 'List orderan baru berhasil ditambahkan!!');
    }


    public function store_cust(Request $request)
    {
        // $nama =  ucwords($request->nama_cust);
        // dd($nama);
        $validatedData = $request->validate([
            'nama_cust'=>'required',
            'lokasi_cust'=>'required',
        ]);
        
        $datacust['nama_cust'] = ucwords($request->nama_cust);
        $datacust['lokasi_cust'] = ucwords($request->lokasi_cust);
        Customer::create($datacust);
        return redirect('/sales')->with('success', ' baru berhasil ditambahkan!!');
    }

    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect('/sales')->with('success', ' Satu data berhasil dihapus!!');
    }

    public function print($id)
    {
      return view ('admin.print', [
          'title' => "Print Nota",
          'order' => Order::find($id),
          'detail_order' => DetilOrder::where('id_order', $id)->get()
      ]);
    }
}
