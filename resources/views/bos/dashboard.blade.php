@extends('layout.bosMain')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">

                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="dripicons-store font-24 text-secondary"></i>
                        </div>
                        <span class="badge badge-danger">Total Barang</span>
                        <h3 class="font-weight-bold  mb-4">{{ $tot_brg }}</h3>
                        {{-- <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>Up From Yesterday</p> --}}
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="dripicons-user-group  font-24 text-secondary"></i>
                        </div>
                        <span class="badge badge-info">Total Pelanggan </span>
                        <h3 class="font-weight-bold  mb-4">{{ $tot_cust }}</h3>
                        {{-- <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Up From Last month</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="dripicons-swap font-24 text-secondary"></i>
                        </div>
                        <span class="badge badge-danger">Total Transaksi</span>
                        <h3 class="font-weight-bold mb-4">Rp. {{ number_format($total_transaksi, 0, ',', '.') }}</h3>
                        {{-- <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>Up From Yesterday</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="dripicons-cart  font-24 text-secondary"></i>
                        </div>
                        <span class="badge badge-info">Total Transaksi Bulan {{ date('F') }}</span>
                        <h3 class="font-weight-bold mb-0">Rp. {{ number_format($total_transaksi_bulan_ini, 0, ',', '.') }}
                        </h3>
                        <p class="mb-0 text-muted text-truncate"><span class="text-success"><i
                                    class="mdi mdi-trending-up"></i>1.5%</span> Up From Last month</p>
                    </div>
                </div>
            </div>
        </div>
...
        <div class="row">
            <div class="col-lg-8">
                <div class="card carousel-bg-img">
                    <div class="card-body dash-info-carousel mb-0">
                        <div id="caroselnew" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Comal - Pemalang</h4>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0"></h4>
                                                        <div class="table-responsive dash-social">
                                                            <table id="datatable" class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Bulan</th>
                                                                        @foreach ($kategori as $k)
                                                                            <th>{{ $k->nama_category }}</th>
                                                                        @endforeach

                                                                    </tr><!--end tr-->
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($bulancmlpml as $cmlpml)
                                                                        <tr>
                                                                            <td>{{ $cmlpml['nama_bulan'] }}</td>
                                                                            @foreach ($cmlpml['produk'] as $item)
                                                                                <td>
                                                                                    {{ $item['total'] }}
                                                                                </td>
                                                                            @endforeach
                                                                        </tr>
                                                                    @endforeach
                                                                    <!--end tr-->


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end carousel-item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Karanganyar - Kedungwuni</h4>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0"></h4>
                                                        <div class="table-responsive dash-social">
                                                            <table id="datatable" class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Bulan</th>
                                                                        @foreach ($kategori as $k)
                                                                            <th>{{ $k->nama_category }}</th>
                                                                        @endforeach

                                                                    </tr><!--end tr-->
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($bulankry as $kry)
                                                                        <tr>
                                                                            <td>{{ $kry['nama_bulan'] }}</td>
                                                                            @foreach ($kry['produk'] as $item)
                                                                                <td>
                                                                                    {{ $item['total'] }}
                                                                                </td>
                                                                            @endforeach
                                                                        </tr>
                                                                    @endforeach
                                                                    <!--end tr-->


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end carousel-item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Bojong - Sragi</h4>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0"></h4>
                                                        <div class="table-responsive dash-social">
                                                            <table id="datatable" class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Bulan</th>
                                                                        @foreach ($kategori as $k)
                                                                            <th>{{ $k->nama_category }}</th>
                                                                        @endforeach

                                                                    </tr><!--end tr-->
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($bulanbjg as $bjg)
                                                                        <tr>
                                                                            <td>{{ $bjg['nama_bulan'] }}</td>
                                                                            @foreach ($bjg['produk'] as $item)
                                                                                <td>
                                                                                    {{ $item['total'] }}
                                                                                </td>
                                                                            @endforeach
                                                                        </tr>
                                                                    @endforeach
                                                                    <!--end tr-->


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end carousel-item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Doro</h4>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0"></h4>
                                                        <div class="table-responsive dash-social">
                                                            <table id="datatable" class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Bulan</th>
                                                                        @foreach ($kategori as $k)
                                                                            <th>{{ $k->nama_category }}</th>
                                                                        @endforeach

                                                                    </tr><!--end tr-->
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($bulandoro as $dr)
                                                                        <tr>
                                                                            <td>{{ $dr['nama_bulan'] }}</td>
                                                                            @foreach ($dr['produk'] as $item)
                                                                                <td>
                                                                                    {{ $item['total'] }}
                                                                                </td>
                                                                            @endforeach
                                                                        </tr>
                                                                    @endforeach
                                                                    <!--end tr-->


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end carousel-item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Kesesi</h4>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0"></h4>
                                                        <div class="table-responsive dash-social">
                                                            <table id="datatable" class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Bulan</th>
                                                                        @foreach ($kategori as $k)
                                                                            <th>{{ $k->nama_category }}</th>
                                                                        @endforeach

                                                                    </tr><!--end tr-->
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($bulankss as $kss)
                                                                        <tr>
                                                                            <td>{{ $kss['nama_bulan'] }}</td>
                                                                            @foreach ($kss['produk'] as $item)
                                                                                <td>
                                                                                    {{ $item['total'] }}
                                                                                </td>
                                                                            @endforeach
                                                                        </tr>
                                                                    @endforeach
                                                                    <!--end tr-->


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end carousel-item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Paninggaran</h4>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title mt-0"></h4>
                                                        <div class="table-responsive dash-social">
                                                            <table id="datatable" class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Bulan</th>
                                                                        @foreach ($kategori as $k)
                                                                            <th>{{ $k->nama_category }}</th>
                                                                        @endforeach

                                                                    </tr><!--end tr-->
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($bulanpng as $pngg)
                                                                        <tr>
                                                                            <td>{{ $pngg['nama_bulan'] }}</td>
                                                                            @foreach ($pngg['produk'] as $item)
                                                                                <td>
                                                                                    {{ $item['total'] }}
                                                                                </td>
                                                                            @endforeach
                                                                        </tr>
                                                                    @endforeach
                                                                    <!--end tr-->


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end carousel-item-->
                            </div>
                            <a class="carousel-control-prev" href="#caroselnew" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#caroselnew" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <div class="row-12">
                                <div class="card carousel-bg-img">
                                    <div class="card-body dash-info-carousel mb-0">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="row">
                                                        <div class="col-12 align-self-center">
                                                            <div class="text-center">
                                                                <h4 class="mt-0 header-title text-left">CML - PML</h4>
                                                                <div class="icon-info my-3">
                                                                    <i class="dripicons-basket bg-soft-info"></i>
                                                                </div>
                                                                <h2 class="mt-0 font-weight-bold text-dark">Rp.
                                                                    {{ number_format($cml_pml, 0, ',', '.') }}</h2>
                                                                {{-- @if ($cml_pml !== 0)
                                                                    @if ($cml_pml > $cml_pml_bulan_lalu)
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-success">
                                                                                <i class="mdi mdi-arrow-up"></i>
                                                                                @php
                                                                                    $persen = ($cml_pml * 100) / $cml_pml_bulan_lalu;
                                                                                @endphp
                                                                                {{ round($persen) }}%
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-danger">
                                                                                <i class="mdi mdi-arrow-down"></i>
                                                                                @php
                                                                                    $persen = ($cml_pml_bulan_lalu * 100) / $cml_pml;
                                                                                @endphp
                                                                                {{ round($persen) }} %
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @endif --}}
                                                                @if ($cml_pml !== 0)
                                                                @if ($cml_pml > $cml_pml_bulan_lalu)
                                                                    @if ($cml_pml_bulan_lalu !== 0)
                                                                        <p class="mb-1 text-muted"><span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                $selisih = $cml_pml - $cml_pml_bulan_lalu;
                                                                                $persen = ($selisih * 100) / $cml_pml_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted">
                                                                            <span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                // $selisih = $cml_pml - $cml_pml_bulan_lalu;
                                                                                $persen = "100";
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @else
                                                                    <p class="mb-1 text-muted"><span
                                                                            class="text-danger">
                                                                            <i class="mdi mdi-arrow-down"></i>
                                                                            @php
                                                                            $selisih = $cml_pml_bulan_lalu - $cml_pml;
                                                                            $persen = ($selisih * 100) / $cml_pml_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }} %
                                                                        </span> Bulan lalu
                                                                    </p>
                                                                @endif
                                                            @endif
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end carousel-item-->
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        <div class="col-12 align-self-center">
                                                            <div class="text-center">
                                                                <h4 class="mt-0 header-title text-left">KRY - KDW</h4>
                                                                <div class="icon-info my-3">
                                                                    <i class="dripicons-basket bg-soft-info"></i>
                                                                </div>
                                                                <h2 class="mt-0 font-weight-bold text-dark">Rp.
                                                                    {{ number_format($kry_kdw, 0, ',', '.') }}</h2>
                                                                {{-- @if ($kry_kdw !== 0)
                                                                    @if ($kry_kdw > $kry_kdw_bulan_lalu)
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-success">
                                                                                <i class="mdi mdi-arrow-up"></i>
                                                                                @php
                                                                                    $persen = ($kry_kdw * 100) / $kry_kdw_bulan_lalu;
                                                                                @endphp
                                                                                {{ round($persen) }}%
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-danger">
                                                                                <i class="mdi mdi-arrow-down"></i>
                                                                                @php
                                                                                    $persen = ($kry_kdw_bulan_lalu * 100) / $kry_kdw;
                                                                                @endphp
                                                                                {{ round($persen) }} %
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @endif --}}
                                                                @if ($kry_kdw !== 0)
                                                                @if ($kry_kdw > $kry_kdw_bulan_lalu)
                                                                    @if ($kry_kdw_bulan_lalu !== 0)
                                                                        <p class="mb-1 text-muted"><span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                $selisih = $kry_kdw - $kry_kdw_bulan_lalu;
                                                                                $persen = ($selisih * 100) / $kry_kdw_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted">
                                                                            <span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                // $selisih = $kry_kdw - $kry_kdw_bulan_lalu;
                                                                                $persen = "100";
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @else
                                                                    <p class="mb-1 text-muted"><span
                                                                            class="text-danger">
                                                                            <i class="mdi mdi-arrow-down"></i>
                                                                            @php
                                                                            $selisih = $kry_kdw_bulan_lalu - $kry_kdw;
                                                                            $persen = ($selisih * 100) / $kry_kdw_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }} %
                                                                        </span> Bulan lalu
                                                                    </p>
                                                                @endif
                                                            @endif
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end carousel-item-->
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        <div class="col-12 align-self-center">
                                                            <div class="text-center">
                                                                <h4 class="mt-0 header-title text-left">BJG</h4>
                                                                <div class="icon-info my-3">
                                                                    <i class="dripicons-basket bg-soft-info"></i>
                                                                </div>
                                                                <h2 class="mt-0 font-weight-bold text-dark">Rp.
                                                                    {{ number_format($bjg_srg, 0, ',', '.') }}</h2>
                                                                {{-- @if ($bjg_srg !== 0)
                                                                    @if ($bjg_srg > $bjg_srg_bulan_lalu)
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-success">
                                                                                <i class="mdi mdi-arrow-up"></i>
                                                                                @php
                                                                                    $persen = ($bjg_srg * 100) / $bjg_srg_bulan_lalu;
                                                                                @endphp
                                                                                {{ round($persen) }}%
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-danger">
                                                                                <i class="mdi mdi-arrow-down"></i>
                                                                                @php
                                                                                    $persen = ($bjg_srg_bulan_lalu * 100) / $bjg_srg;
                                                                                @endphp
                                                                                {{ round($persen) }} %
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @endif --}}
                                                                @if ($bjg_srg !== 0)
                                                                @if ($bjg_srg > $bjg_srg_bulan_lalu)
                                                                    @if ($bjg_srg_bulan_lalu !== 0)
                                                                        <p class="mb-1 text-muted"><span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                $selisih = $bjg_srg - $bjg_srg_bulan_lalu;
                                                                                $persen = ($selisih * 100) / $bjg_srg_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted">
                                                                            <span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                // $selisih = $bjg_srg - $bjg_srg_bulan_lalu;
                                                                                $persen = "100";
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @else
                                                                    <p class="mb-1 text-muted"><span
                                                                            class="text-danger">
                                                                            <i class="mdi mdi-arrow-down"></i>
                                                                            @php
                                                                            $selisih = $bjg_srg_bulan_lalu - $bjg_srg;
                                                                            $persen = ($selisih * 100) / $bjg_srg_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }} %
                                                                        </span> Bulan lalu
                                                                    </p>
                                                                @endif
                                                            @endif
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end carousel-item-->
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        <div class="col-12 align-self-center">
                                                            <div class="text-center">
                                                                <h4 class="mt-0 header-title text-left">DORO</h4>
                                                                <div class="icon-info my-3">
                                                                    <i class="dripicons-basket bg-soft-info"></i>
                                                                </div>
                                                                <h2 class="mt-0 font-weight-bold text-dark">Rp.
                                                                    {{ number_format($doro, 0, ',', '.') }}</h2>
                                                                {{-- @if ($doro !== 0)
                                                                    @if ($doro > $doro_bulan_lalu)
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-success">
                                                                                <i class="mdi mdi-arrow-up"></i>
                                                                                @php
                                                                                    $persen = ($doro * 100) / $doro_bulan_lalu;
                                                                                @endphp
                                                                                {{ round($persen) }}%
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-danger">
                                                                                <i class="mdi mdi-arrow-down"></i>
                                                                                @php
                                                                                    $persen = ($doro_bulan_lalu * 100) / $doro;
                                                                                @endphp
                                                                                {{ round($persen) }} %
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @endif --}}
                                                                @if ($doro !== 0)
                                                                @if ($doro > $doro_bulan_lalu)
                                                                    @if ($doro_bulan_lalu !== 0)
                                                                        <p class="mb-1 text-muted"><span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                $selisih = $doro - $doro_bulan_lalu;
                                                                                $persen = ($selisih * 100) / $doro_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted">
                                                                            <span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                // $selisih = $doro - $doro_bulan_lalu;
                                                                                $persen = "100";
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @else
                                                                    <p class="mb-1 text-muted"><span
                                                                            class="text-danger">
                                                                            <i class="mdi mdi-arrow-down"></i>
                                                                            @php
                                                                            $selisih = $doro_bulan_lalu - $doro;
                                                                            $persen = ($selisih * 100) / $doro_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }} %
                                                                        </span> Bulan lalu
                                                                    </p>
                                                                @endif
                                                            @endif
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end carousel-item-->
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        <div class="col-12 align-self-center">
                                                            <div class="text-center">
                                                                <h4 class="mt-0 header-title text-left">KESESI</h4>
                                                                <div class="icon-info my-3">
                                                                    <i class="dripicons-basket bg-soft-info"></i>
                                                                </div>
                                                                <h2 class="mt-0 font-weight-bold text-dark">Rp.
                                                                    {{ number_format($kesesi, 0, ',', '.') }}</h2>
                                                                @if ($kesesi !== 0)
                                                                    @if ($kesesi > $kesesi_bulan_lalu)
                                                                        @if ($kesesi_bulan_lalu !== 0)
                                                                            <p class="mb-1 text-muted"><span class="text-success">
                                                                                <i class="mdi mdi-arrow-up"></i>
                                                                                @php
                                                                                    $selisih = $kesesi - $kesesi_bulan_lalu;
                                                                                    $persen = ($selisih * 100) / $kesesi_bulan_lalu;
                                                                                @endphp
                                                                                {{ round($persen) }}%
                                                                            </span> Bulan lalu
                                                                            </p>
                                                                        @else
                                                                            <p class="mb-1 text-muted">
                                                                                <span class="text-success">
                                                                                <i class="mdi mdi-arrow-up"></i>
                                                                                @php
                                                                                    // $selisih = $kesesi - $kesesi_bulan_lalu;
                                                                                    $persen = "100";
                                                                                @endphp
                                                                                {{ round($persen) }}%
                                                                            </span> Bulan lalu
                                                                            </p>
                                                                        @endif
                                                                    @else
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-danger">
                                                                                <i class="mdi mdi-arrow-down"></i>
                                                                                @php
                                                                                $selisih = $kesesi_bulan_lalu - $kesesi;
                                                                                $persen = ($selisih * 100) / $kesesi_bulan_lalu;
                                                                                @endphp
                                                                                {{ round($persen) }} %
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end carousel-item-->
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        <div class="col-12 align-self-center">
                                                            <div class="text-center">
                                                                <h4 class="mt-0 header-title text-left">PANINGGARAN</h4>
                                                                <div class="icon-info my-3">
                                                                    <i class="dripicons-basket bg-soft-info"></i>
                                                                </div>
                                                                <h2 class="mt-0 font-weight-bold text-dark">Rp.
                                                                    {{ number_format($png, 0, ',', '.') }}</h2>
                                                                {{-- @if ($png !== 0)
                                                                    @if ($png > $png_bulan_lalu)
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-success">
                                                                                <i class="mdi mdi-arrow-up"></i>
                                                                                @php
                                                                                    $persen = ($png * 100) / $png_bulan_lalu;
                                                                                @endphp
                                                                                {{ round($persen) }}%
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted"><span
                                                                                class="text-danger">
                                                                                <i class="mdi mdi-arrow-down"></i>
                                                                                @php
                                                                                    $persen = ($png_bulan_lalu * 100) / $png;
                                                                                @endphp
                                                                                {{ round($persen) }} %
                                                                            </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @endif --}}
                                                                @if ($png !== 0)
                                                                @if ($png > $png_bulan_lalu)
                                                                    @if ($png_bulan_lalu !== 0)
                                                                        <p class="mb-1 text-muted"><span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                $selisih = $png - $png_bulan_lalu;
                                                                                $persen = ($selisih * 100) / $png_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @else
                                                                        <p class="mb-1 text-muted">
                                                                            <span class="text-success">
                                                                            <i class="mdi mdi-arrow-up"></i>
                                                                            @php
                                                                                // $selisih = $png - $png_bulan_lalu;
                                                                                $persen = "100";
                                                                            @endphp
                                                                            {{ round($persen) }}%
                                                                        </span> Bulan lalu
                                                                        </p>
                                                                    @endif
                                                                @else
                                                                    <p class="mb-1 text-muted"><span
                                                                            class="text-danger">
                                                                            <i class="mdi mdi-arrow-down"></i>
                                                                            @php
                                                                            $selisih = $png_bulan_lalu - $png;
                                                                            $persen = ($selisih * 100) / $png_bulan_lalu;
                                                                            @endphp
                                                                            {{ round($persen) }} %
                                                                        </span> Bulan lalu
                                                                    </p>
                                                                @endif
                                                            @endif
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end carousel-item-->


                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-gradient1">
                                <div class="">
                                    <div class="card-icon">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <h2 class="font-weight-bold text-white">10</h2>
                                    <p class="text-white mb-0 font-16">Top 10 Customer</p>
                                </div>
                            </div>
                            <div class="card-body dash-info-carousel">
                                <div id="carousel_best_saler" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="text-center">
                                                <img src="assets/images/users/user-4.jpg" alt="user"
                                                    class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                <h5>{{ $datacust['0']->nama_custs }}</h5>
                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat</p>
                                                <p class="mb-0 text-muted"></p>
                                                <div class="mt-2 align-item-center">
                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">Rp.
                                                        {{ number_format($datacust['0']->totals) }}</h5>

                                                </div>
                                            </div>
                                        </div>
                                        @foreach ($datacust->skip(1) as $sc)
                                            <div class="carousel-item">
                                                <div class="text-center">
                                                    <img src="assets/images/users/user-4.jpg" alt="user"
                                                        class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                    <h5>{{ $sc->nama_custs }}</h5>
                                                    <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat
                                                        Customer</p>
                                                    <p class="mb-0 text-muted">
                                                    </p>
                                                    <div class="mt-2 align-item-center">
                                                        <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">Rp.
                                                            {{ number_format($sc->total) }}</h5>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel_best_saler" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel_best_saler" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div>
        </div>

        {{-- ,, --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Overview</h4>
                        <div class="chart-demo dash-apex-chart">
                            <div id="d2_overview" class="apex-charts"></div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
        {{-- ---------- --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body new-user order-list">
                        <h4 class="header-title mt-0 mb-3">Rating Daerah Order</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        {{-- <th class="border-top-0">Product</th> --}}
                                        <th class="border-top-0">Pro Name</th>
                                        <th class="border-top-0">Country</th>
                                        {{-- <th class="border-top-0">Order Date/Time</th> --}}
                                        {{-- <th class="border-top-0">Pcs.</th>                                     --}}
                                        <th class="border-top-0">Amount ($)</th>
                                        {{-- <th class="border-top-0">Status</th> --}}
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>
                                            Beg
                                        </td>
                                        <td>
                                            <img src="assets/images/flags/us_flag.jpg" alt=""
                                                class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        {{-- <td>3/03/2019 4:29 PM</td> --}}
                                        {{-- <td>200</td>                                    --}}
                                        <td> $750</td>
                                        <td>
                                            {{-- <span class="badge badge-boxed  badge-soft-success">Shipped</span> --}}
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>

                                        <td>
                                            Watch
                                        </td>
                                        <td>
                                            <img src="assets/images/flags/french_flag.jpg" alt=""
                                                class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        {{-- <td>13/03/2019 1:09 PM</td> --}}
                                        {{-- <td>180</td>                                    --}}
                                        <td> $970</td>
                                        <td>
                                            {{-- <span class="badge badge-boxed  badge-soft-danger">Delivered</span> --}}
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>

                                        <td>
                                            Headphone
                                        </td>
                                        <td>
                                            <img src="assets/images/flags/spain_flag.jpg" alt=""
                                                class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        {{-- <td>22/03/2019 12:09 PM</td> --}}
                                        {{-- <td>30</td>                                    --}}
                                        <td> $2800</td>
                                        <td>
                                            {{-- <span class="badge badge-boxed badge-soft-warning">Pending</span> --}}
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>

                                        <td>
                                            Purse
                                        </td>
                                        <td>
                                            <img src="assets/images/flags/russia_flag.jpg" alt=""
                                                class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        {{-- <td>14/03/2019 8:27 PM</td> --}}
                                        {{-- <td>100</td>                                    --}}
                                        <td> $520</td>
                                        <td>
                                            {{-- <span class="badge badge-boxed  badge-soft-success">Shipped</span>                                                                     --}}
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>

                                        <td>
                                            Shoe
                                        </td>
                                        <td>
                                            <img src="assets/images/flags/italy_flag.jpg" alt=""
                                                class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        {{-- <td>18/03/2019 5:09 PM</td> --}}
                                        {{-- <td>100</td>                                    --}}
                                        <td> $1150</td>
                                        <td>
                                            {{-- <span class="badge badge-boxed badge-soft-warning">Pending</span> --}}
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>

                                        <td>
                                            Boll
                                        </td>
                                        <td>
                                            <img src="assets/images/flags/us_flag.jpg" alt=""
                                                class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        {{-- <td>30/03/2019 4:29 PM</td> --}}
                                        {{-- <td>140</td>                                    --}}
                                        <td> $ 650</td>
                                        <td>
                                            {{-- <span class="badge badge-boxed  badge-soft-success">Shipped</span> --}}
                                        </td>
                                    </tr><!--end tr-->
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        {{-- --------- --}}

    </div><!-- container -->
@endsection

@push('js')
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/pages/jquery.dashboard.init.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/pages/jquery.dashboard-2.init.js"></script>
@endpush
