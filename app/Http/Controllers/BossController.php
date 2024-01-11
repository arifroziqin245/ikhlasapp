<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\DetilOrder;
use App\Models\Inventory;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BossController extends Controller
{

    public function batangWilayah($tahun)
    {
        $a = date('01', strtotime('+1 day'));
        $cml_pml = [
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('01'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('02'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('03'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('04'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('05'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('06'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('07'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('08'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('09'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('10'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('11'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('12'))->whereYear('created_at', $tahun)->sum('total'),
        ];

        $kry_kdw = [
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('01'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('02'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('03'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('04'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('05'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('06'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('07'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('08'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('09'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('10'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('11'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('12'))->whereYear('created_at', $tahun)->sum('total'),
        ];
        $bjg_srg = [
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('01'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('02'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('03'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('04'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('05'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('06'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('07'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('08'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('09'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('10'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('11'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('12'))->whereYear('created_at', $tahun)->sum('total'),
        ];
        $doro = [
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('01'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('02'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('03'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('04'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('05'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('06'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('07'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('08'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('09'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('10'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('11'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('12'))->whereYear('created_at', $tahun)->sum('total'),
        ];
        $kss = [
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('01'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('02'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('03'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('04'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('05'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('06'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('07'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('08'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('09'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('10'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('11'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('12'))->whereYear('created_at', $tahun)->sum('total'),
        ];
        $png = [
            // Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('m'))->whereYear('created_at', $tahun)->sum('total'),

            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('01'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('02'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('03'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('04'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('05'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('06'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('07'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('08'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('09'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('10'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('11'))->whereYear('created_at', $tahun)->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('12'))->whereYear('created_at', $tahun)->sum('total'),
        ];

        return $data = [
            'cml_pml' => implode(",", $cml_pml),
            'kry_kdw' => implode(",", $kry_kdw),
            'doro' => implode(",", $doro),
            'bjg_srg' => implode(",", $bjg_srg),
            'kss' => implode(",", $kss),
            'png' => implode(",", $png),
        ];
    }

    public function donutLokasi()
    {
        $donut = [
            Order::whereIn('lokasi_cust', ['Comal', 'Pemalang'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            Order::whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            Order::whereIn('lokasi_cust', ['Bojong', 'Sragi'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            Order::whereIn('lokasi_cust', ['Doro'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            Order::whereIn('lokasi_cust', ['Kesesi'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
            Order::whereIn('lokasi_cust', ['Paninggaran'])->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total'),
        ];

        return $data = [
            'nominal' => implode(",", $donut),
            'wilayah' => ['"Cml - Pml"', '"Kry - Kdw"', '"Bjg - Srg"', '"Doro"', '"Kesesi"', '"Png"']
        ];
    }

    public function batangCustomer()
    {
        $order = Order::select('nama_custs', 'total', 'created_at', DB::raw('SUM(total) AS totals'))
            ->whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->orderBy('totals', 'Desc')
            ->groupBy('nama_custs')
            ->limit(10)
            ->get();
        $jumlah = [];
        $nama = [];
        foreach ($order as $o) {
            array_push($jumlah, $o->totals);
            array_push($nama, '"' . $o->nama_custs  . '"');
        }

        return $data = [
            'jumlah' => implode(",", $jumlah),
            'nama' => implode(",", $nama),
        ];
    }

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
        foreach ($customer as $c) {
            $datacust[] = [
                'no' => $no,
                'nama_cust' => $c->nama_cust,
                'total_pembelian' => Order::where('nama_custs', $c->nama_cust)->sum('total')
            ];
            $no++;
        }

        $kategori = Category::all();
        foreach ($kategori as $key => $value) {
            // isi dari data bulan januari
            $isijancmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '01')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijankry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '01')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijanbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '01')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijandoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '01')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijankss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '01')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijanpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '01')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------------february
            $isifebcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '02')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isifebkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '02')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isifebbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '02')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isifebdoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '02')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isifebkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '02')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isifebpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '02')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // -------maret
            $isimarcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '03')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimarkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '03')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimarbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '03')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimardoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '03')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimarkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '03')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimarpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '03')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------april
            $isiaprcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '04')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiaprkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '04')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiaprbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '04')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiaprdoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '04')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiaprkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '04')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiaprpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '04')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------mei
            $isimeicmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '05')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimeikry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '05')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimeibjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '05')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimeidoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '05')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimeikss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '05')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isimeipng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '05')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------juni
            $isijuncmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '06')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijunkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '06')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijunbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '06')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijundoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '06')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijunkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '06')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijunpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '06')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------juli
            $isijulcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '07')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijulkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '07')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijulbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '07')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijuldoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '07')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijulkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '07')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isijulpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '07')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------agustus
            $isiagtcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '08')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiagtkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '08')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiagtbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '08')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiagtdoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '08')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiagtkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '08')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiagtpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '08')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------september
            $isisepcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '09')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isisepkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '09')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isisepbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '09')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isisepdoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '09')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isisepkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '09')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isiseppng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '09')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------oktober
            $isioktcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '10')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isioktkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '10')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isioktbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '10')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isioktdoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '10')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isioktkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '10')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isioktpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '10')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------november
            $isinovcmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '11')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isinovkry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '11')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isinovbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '11')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isinovdoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '11')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isinovkss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '11')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isinovpng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '11')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // ------desember
            $isidescmlpml[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '12')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Comal', 'Pemalang']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isideskry[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '12')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Karanganyar', 'Kedungwuni']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isidesbjg[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '12')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Bojong', 'Sragi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isidesdoro[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '12')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Doro']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isideskss[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '12')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Kesesi']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];

            $isidespng[] = [
                'total' => DetilOrder::where('category', $value['nama_category'])->whereMonth('created_at', '12')->whereYear('created_at', date('Y'))
                    ->whereHas('order', function ($q) {
                        $q->whereIn('lokasi_cust', ['Paninggaran']);
                    })
                    ->sum('total'),
                'nama_category' => $value['nama_category']
            ];
            // end


        }

        $bulancmlpml[] = [
            'jan' => [
                'nama_bulan' => 'Januari',
                'produk' => $isijancmlpml
            ],
            'feb' => [
                'nama_bulan' => 'februari',
                'produk' => $isifebcmlpml
            ],
            'mar' => [
                'nama_bulan' => 'Maret',
                'produk' => $isimarcmlpml
            ],
            'apr' => [
                'nama_bulan' => 'April',
                'produk' => $isiaprcmlpml
            ],
            'mei' => [
                'nama_bulan' => 'Mei',
                'produk' => $isimeicmlpml
            ],
            'jun' => [
                'nama_bulan' => 'Juni',
                'produk' => $isijuncmlpml
            ],
            'jul' => [
                'nama_bulan' => 'Juli',
                'produk' => $isijulcmlpml
            ],
            'agt' => [
                'nama_bulan' => 'Agustus',
                'produk' => $isiagtcmlpml
            ],
            'sep' => [
                'nama_bulan' => 'September',
                'produk' => $isisepcmlpml
            ],
            'okt' => [
                'nama_bulan' => 'Oktober',
                'produk' => $isioktcmlpml
            ],
            'nov' => [
                'nama_bulan' => 'November',
                'produk' => $isinovcmlpml
            ],
            'des' => [
                'nama_bulan' => 'Desember',
                'produk' => $isidescmlpml
            ],
        ];

        // ------kry
        $bulankry[] = [
            'jan' => [
                'nama_bulan' => 'Januari',
                'produk' => $isijankry
            ],

            'feb' => [
                'nama_bulan' => 'februari',
                'produk' => $isifebkry
            ],
            'mar' => [
                'nama_bulan' => 'Maret',
                'produk' => $isimarkry
            ],
            'apr' => [
                'nama_bulan' => 'April',
                'produk' => $isiaprkry
            ],
            'mei' => [
                'nama_bulan' => 'Mei',
                'produk' => $isimeikry
            ],
            'jun' => [
                'nama_bulan' => 'Juni',
                'produk' => $isijunkry
            ],
            'jul' => [
                'nama_bulan' => 'Juli',
                'produk' => $isijulkry
            ],
            'agt' => [
                'nama_bulan' => 'Agustus',
                'produk' => $isiagtkry
            ],
            'sep' => [
                'nama_bulan' => 'September',
                'produk' => $isisepkry
            ],
            'okt' => [
                'nama_bulan' => 'Oktober',
                'produk' => $isioktkry
            ],
            'nov' => [
                'nama_bulan' => 'November',
                'produk' => $isinovkry
            ],
            'des' => [
                'nama_bulan' => 'Desember',
                'produk' => $isideskry
            ],
        ];
        //-------bjg
        $bulanbjg[] = [
            'jan' => [
                'nama_bulan' => 'Januari',
                'produk' => $isijanbjg
            ],

            'feb' => [
                'nama_bulan' => 'februari',
                'produk' => $isifebbjg
            ],
            'mar' => [
                'nama_bulan' => 'Maret',
                'produk' => $isimarbjg
            ],
            'apr' => [
                'nama_bulan' => 'April',
                'produk' => $isiaprbjg
            ],
            'mei' => [
                'nama_bulan' => 'Mei',
                'produk' => $isimeibjg
            ],
            'jun' => [
                'nama_bulan' => 'Juni',
                'produk' => $isijunbjg
            ],
            'jul' => [
                'nama_bulan' => 'Juli',
                'produk' => $isijulbjg
            ],
            'agt' => [
                'nama_bulan' => 'Agustus',
                'produk' => $isiagtbjg
            ],
            'sep' => [
                'nama_bulan' => 'September',
                'produk' => $isisepbjg
            ],
            'okt' => [
                'nama_bulan' => 'Oktober',
                'produk' => $isioktbjg
            ],
            'nov' => [
                'nama_bulan' => 'November',
                'produk' => $isinovbjg
            ],
            'des' => [
                'nama_bulan' => 'Desember',
                'produk' => $isidesbjg
            ],
        ];
        // ------doro
        $bulandoro[] = [
            'jan' => [
                'nama_bulan' => 'Januari',
                'produk' => $isijandoro
            ],

            'feb' => [
                'nama_bulan' => 'februari',
                'produk' => $isifebdoro
            ],
            'mar' => [
                'nama_bulan' => 'Maret',
                'produk' => $isimardoro
            ],
            'apr' => [
                'nama_bulan' => 'April',
                'produk' => $isiaprdoro
            ],
            'mei' => [
                'nama_bulan' => 'Mei',
                'produk' => $isimeidoro
            ],
            'jun' => [
                'nama_bulan' => 'Juni',
                'produk' => $isijundoro
            ],
            'jul' => [
                'nama_bulan' => 'Juli',
                'produk' => $isijuldoro
            ],
            'agt' => [
                'nama_bulan' => 'Agustus',
                'produk' => $isiagtdoro
            ],
            'sep' => [
                'nama_bulan' => 'September',
                'produk' => $isisepdoro
            ],
            'okt' => [
                'nama_bulan' => 'Oktober',
                'produk' => $isioktdoro
            ],
            'nov' => [
                'nama_bulan' => 'November',
                'produk' => $isinovdoro
            ],
            'des' => [
                'nama_bulan' => 'Desember',
                'produk' => $isidesdoro
            ],
        ];
        //-------kss
        $bulankss[] = [
            'jan' => [
                'nama_bulan' => 'Januari',
                'produk' => $isijankss
            ],

            'feb' => [
                'nama_bulan' => 'februari',
                'produk' => $isifebkss
            ],
            'mar' => [
                'nama_bulan' => 'Maret',
                'produk' => $isimarkss
            ],
            'apr' => [
                'nama_bulan' => 'April',
                'produk' => $isiaprkss
            ],
            'mei' => [
                'nama_bulan' => 'Mei',
                'produk' => $isimeikss
            ],
            'jun' => [
                'nama_bulan' => 'Juni',
                'produk' => $isijunkss
            ],
            'jul' => [
                'nama_bulan' => 'Juli',
                'produk' => $isijulkss
            ],
            'agt' => [
                'nama_bulan' => 'Agustus',
                'produk' => $isiagtkss
            ],
            'sep' => [
                'nama_bulan' => 'September',
                'produk' => $isisepkss
            ],
            'okt' => [
                'nama_bulan' => 'Oktober',
                'produk' => $isioktkss
            ],
            'nov' => [
                'nama_bulan' => 'November',
                'produk' => $isinovkss
            ],
            'des' => [
                'nama_bulan' => 'Desember',
                'produk' => $isideskss
            ],
        ];
        //-------png
        $bulanpng[] = [
            'jan' => [
                'nama_bulan' => 'Januari',
                'produk' => $isijanpng
            ],

            'feb' => [
                'nama_bulan' => 'februari',
                'produk' => $isifebpng
            ],
            'mar' => [
                'nama_bulan' => 'Maret',
                'produk' => $isimarpng
            ],
            'apr' => [
                'nama_bulan' => 'April',
                'produk' => $isiaprpng
            ],
            'mei' => [
                'nama_bulan' => 'Mei',
                'produk' => $isimeipng
            ],
            'jun' => [
                'nama_bulan' => 'Juni',
                'produk' => $isijunpng
            ],
            'jul' => [
                'nama_bulan' => 'Juli',
                'produk' => $isijulpng
            ],
            'agt' => [
                'nama_bulan' => 'Agustus',
                'produk' => $isiagtpng
            ],
            'sep' => [
                'nama_bulan' => 'September',
                'produk' => $isiseppng
            ],
            'okt' => [
                'nama_bulan' => 'Oktober',
                'produk' => $isioktpng
            ],
            'nov' => [
                'nama_bulan' => 'November',
                'produk' => $isinovpng
            ],
            'des' => [
                'nama_bulan' => 'Desember',
                'produk' => $isidespng
            ],
        ];
        //end 
        // dd($bulancmlpml[0]);
        $tahun = request('tahun') == null ? date('Y') : request('tahun');
        $batang = $this->batangWilayah($tahun);
        $donut = $this->donutLokasi();
        $batang_custs = $this->batangCustomer();
        // return $batang_custs['nama'];
        // $datac = Order::select('nama_custs', 'total', DB::raw('SUM(total) AS totals'))->groupBy('nama_custs')->orderByDesc('totals')->limit(10)->get();
        // dd($batang);
        $order = Order::select('nama_custs', 'total', 'created_at', DB::raw('SUM(total) AS totals'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('nama_custs')
            ->orderBy('totals', 'Desc')
            ->limit(10)
            ->get();
        // return $order;
        $tahun_batang = $this->diagram_batang_pertahun();
        // return $tahun_batang;
        return view('bos.dashboard', [
            'active' => "dashboard",
            'title' => "Dahboard",
            'tot_brg' => Inventory::count(),
            'tot_cust' => Customer::count(),
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
            'datacust' => $order,

            // 'datacust' => Order::select('nama_custs', 'total', DB::raw('SUM(total) AS totals'))->orderBy('total', 'desc')->groupBy('nama_custs')->limit(10)->get(),
            'kategori' => Category::select('nama_category')->get(),
            'bulancmlpml' => $bulancmlpml[0],
            'bulankry' => $bulankry[0],
            'bulanbjg' => $bulanbjg[0],
            'bulandoro' => $bulandoro[0],
            'bulankss' => $bulankss[0],
            'bulanpng' => $bulanpng[0],

            'total_batang_cml_pml' => $batang['cml_pml'],
            'total_batang_kry_kdw' => $batang['kry_kdw'],
            'total_batang_bjg_srg' => $batang['bjg_srg'],
            'total_batang_doro' => $batang['doro'],
            'total_batang_kss' => $batang['kss'],
            'total_batang_png' => $batang['png'],
            'total_donut_nominal' => $donut['nominal'],
            'total_donut_wilayah' => implode(",", $donut['wilayah']),
            'batang_cust_jumlah' => $batang_custs['jumlah'],
            'batang_cust_nama' => $batang_custs['nama'],
            'tahun_range' => $this->tahun_range(),
            'tahun' => request('tahun') == null ? date('Y') : request('tahun'),
            'tahun_batang' => $tahun_batang
        ]);
    }

    public function diagram_batang_pertahun(){
        $tahun_sekarang = Carbon::now()->year;
        $tahun_range = range($tahun_sekarang - 4, $tahun_sekarang + 0);

        $tahun = [];
        $total = [];
        foreach ($tahun_range as $tr) {
            array_push($tahun, $tr);
            array_push($total, Order::whereYear('created_at', $tr)->sum('total'));
        }

        return $data = [
            'tahun' => implode(",", $tahun),
            'total' => implode(",", $total),
        ];
    }

    public function tahun_range()
    {
        $tahun_sekarang = Carbon::now()->year;
        $tahun_range = range($tahun_sekarang + 0, $tahun_sekarang - 4);

        return $tahun_range;
    }

    public function getDetailORder($id)
    {
        try {
            $getDetail = DetilOrder::where('id_order', $id)->get();
            $total = DetilOrder::where('id_order', $id)->sum('total');
            return response()->json(['data' => $getDetail, 'total' => $total]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Data tidak ditemukan']);
        }
    }

    public function laporan(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;

        return view('bos.laporan', [
            'title' => 'Cetak Laporan Order',
            'order' => Order::select("*")->whereBetween('created_at', [$awal, $akhir])->get(),
            'awal' => $awal,
            'akhir' => $akhir,

        ]);
    }
    public function laporan_penj(Request $request)
    {
        $bulan = $request->bulan;
        $produk = $request->produk;
        $lokasi = $request->lokasi;
        switch ($lokasi) {
            case '1':
                $namalok =  ['Comal', 'Pemalang'];
                break;
            case '2':
                $namalok =  ['Karanganyar', 'Kedungwuni'];
                break;
            case '3':
                $namalok =  ['Bojong', 'Sragi'];
                break;
            case '4':
                $namalok =  ['Doro'];
                break;
            case '5':
                $namalok =  ['Kesesi'];
                break;
            case '6':
                $namalok =  ['Paninggaran'];
                break;

            default:
                # code...
                break;
        }

        $month = substr($bulan, 5, 2);
        $year = substr($bulan, 0, 4);
        if ($produk == "All" && $lokasi !== "All") {
            $detailorder = DetilOrder::with('order')
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', $year)
                ->whereHas('order', function ($q) use ($namalok) {
                    $q->whereIn('lokasi_cust', $namalok);
                })
                ->get();
        }elseif($lokasi == "All" && $produk !== "All"){
            $detailorder = DetilOrder::with('order')
                ->where('nama_barang', $produk)
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', $year)
                ->get();
        }
        else {
            // return $produk;
            $detailorder = DetilOrder::with('order')
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->get();   
        }

        // return $detailorder;
        return view('bos.laporan_penj', [
            'title' => 'Cetak Laporan Order',
            // 'order' => Order::select("*")->whereBetween('created_at', [$awal, $akhir])->get(),
            'bulan' => $bulan,
            'data' => $detailorder

        ]);
    }
    public function signin()
    {
        return view('signin', [
            'active' => 'signin',
            'title' => "Signin",
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
