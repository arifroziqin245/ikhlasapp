<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulan_ini = date('m');
        $bulan_lalu = $bulan_ini - 1;

        $customer = Customer::select('nama_cust')->get();
        $no = 1;
        foreach($customer as $c){
            $datacust[] = [
                'no' => $no,
                'nama_cust' => $c->nama_cust,
                'total_pembelian' => Order::where('nama_custs', $c->nama_cust)->sum('total')
            ];
            $no++;
        }

        return view('bos.dashboard', [
            'title' => "Dashboard",
            'total_transaksi' => Order::select('total')->sum('total'),
            'total_transaksi_bulan_ini' => Order::select('total')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            
            'cml_pml' => Order::select('total')->whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            'kry_kdw' => Order::select('total')->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            'bjg_srg' => Order::select('total')->whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            'doro' => Order::select('total')->whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            'kesesi' => Order::select('total')->whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            'png' => Order::select('total')->whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            
            'cml_pml_bulan_lalu' => Order::select('total')->whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date($bulan_lalu))->whereYear('created_at', date('Y'))->sum('total'),
            'kry_kdw_bulan_lalu' => Order::select('total')->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date($bulan_lalu))->whereYear('created_at', date('Y'))->sum('total'),
            'bjg_srg_bulan_lalu' => Order::select('total')->whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date($bulan_lalu))->whereYear('created_at', date('Y'))->sum('total'),
            'doro_bulan_lalu' => Order::select('total')->whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date($bulan_lalu))->whereYear('created_at', date('Y'))->sum('total'),
            'kesesi_bulan_lalu' => Order::select('total')->whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date($bulan_lalu))->whereYear('created_at', date('Y'))->sum('total'),
            'png_bulan_lalu' => Order::select('total')->whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date($bulan_lalu))->whereYear('created_at', date('Y'))->sum('total'),
            // 'datacust' => $datacust    
            'datacust' => Order::select('nama_custs', 'total', DB::raw('SUM(total) AS totals'))->orderBy('total', 'desc')->groupBy('nama_custs')->limit(10)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
