@extends('layout.bosMain')

@section('container')
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0">Laporan Transaksi Order</h4>
                    <p class="mb-4 text-muted">Ikhlas Stationary Kajen</p>
                    <div class="table-responsive">

                        <form action="/boss/laporan" method="post">
                            {{-- <h4 class="header-title mt-0">Lihat Laporan Transaksi</h4> --}}
                            @csrf
                            <div class="form-group row mb-0">
                                <label for="example-date-input" class="col-sm-4 col-form-label text-left">Tanggal Awal</label>
                                <label for="example-date-input" class="col-sm-4 col-form-label text-left">Tanggal Akhir</label>
                            </div>
                            <div class="form-group row mt-0">

                                <div class="col-sm-4">
                                    <input class="form-control awal" type="date" id="example-date-input" name="awal">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control akhir" type="date" id="example-date-input" name="akhir">
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary ml-0 align-items-md-end">Lihat</button>
                                </div>

                            </div>
                        </form>

                        {{-- <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order_all as $o)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $o->nama_custs }}</td>
                                            <td><a href="#" class="btn btn-sm btn-dark" id="detail"
                                                    data-id="{{ $o->id }}"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end /table-->
                        </div> --}}
                        <!--end /tableresponsive-->
                        
                        <!--end /table-->
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0">List Order</h4>
                    <p class="mb-4 text-muted">{{ $lok }}</p>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                    <tr>
                                        <td class="font-weight-bold"> {{ $item->nama_custs }}</td>
                                        <td>
                                            @if ($item->status_order == '0')
                                                <span class="badge badge-danger">Belum proses</span>
                                        </td>
                                    @else
                                        <span class="badge badge-warning">Proses</span></td>
                                @endif
                               
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end /table-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end /tableresponsive-->
    <div class="modal fade modalDetail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Preview Detail Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div id="modaldetail_order">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Jumlah</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@push('js')
    <script>
        const rupiah = (number) => {
            return new Intl.NumberFormat("id-ID", {
                style: "decimal",
                currency: "IDR"
            }).format(number);
        }

        $(document).on('click', '#detail', function(e) {
            e.preventDefault();
            let iddetail = $(this).data('id');
            $('.modalDetail').modal('show');
            $.ajax({
                url: "{{ url('/get_do') }}/" + iddetail,
                method: "GET",
                success: function(response) {
                    let data = response.data;
                    data.forEach((params) => {
                        var body = `
                            <tr>
                                <td>` + params.jumlah + ` ` + params.satuan + `</td>    
                                <td>` + params.nama_barang + `</td>    
                                <td>Rp. ` + rupiah(params.harga) + `</td>    
                                <td>Rp. ` + rupiah(params.total) + `</td>    
                            </tr>
                        `
                        $('#modaldetail_order table tbody').append(body);
                    });
                    $('#modaldetail_order table tbody').append(`
                    <tr>
                        <td colspan="3">Total</td>
                        <td>Rp. ` + rupiah(response.total) + `</td>    
                    </tr>
                    `);
                },
                error: function(err) {
                    alert('data tidak ditemukan');
                }
            });
        })
    </script>


    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/pages/jquery.forms-advanced.js"></script>
@endpush
