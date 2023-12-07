@extends('layout.bosMain')

@section('container')
<div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 mb-4">
    <div class="card">
        <div class="card-body">
                    <h1 class="header-title mt-0">List Order</h1>
                    <h4 class="header-title mt-0">Karanganyar - Kedungwuni</h4>
                    <p class="mb-4 text-muted">22 Oktober 2022</p>
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
                                {{-- <td>
                                    <button type="button" class="btn btn-sm btn-success">
                                        <a href="/admin/detail_order/{{ $item->id }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </button>
                                </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end /table-->
                    </div>
                </div>
                </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                    <h2 class="header-title mt-0">Laporan Order</h2>
                    <h4 class="header-title mt-0">Karanganyar - Kedungwuni</h4>
                    <p class="mb-4 text-muted">22 Oktober 2022</p>
                    <div class="table-responsive">

                        <div class="table-responsive">
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
                                            <td><a href="#" class="btn btn-sm btn-dark" id="detail" data-id="{{ $o->id }}"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end /table-->
                        </div>
                        <!--end /tableresponsive-->
                        </table>
                        <!--end /table-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end /tableresponsive-->
    <div class="modal fade modalDetail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

        $(document).on('click', '#detail', function(e){
            e.preventDefault();
            let iddetail = $(this).data('id');
            $('.modalDetail').modal('show');
            $.ajax({
                url : "{{ url('/get_do') }}/"+iddetail,
                method: "GET",
                success: function(response){
                    let data = response.data;
                    data.forEach((params) => {
                        var body = `
                            <tr>
                                <td>`+params.jumlah+` `+params.satuan+`</td>    
                                <td>`+params.nama_barang+`</td>    
                                <td>Rp. `+rupiah(params.harga)+`</td>    
                                <td>Rp. `+rupiah(params.total)+`</td>    
                            </tr>
                        `
                        $('#modaldetail_order table tbody').append(body);
                    });
                    $('#modaldetail_order table tbody').append(`
                    <tr>
                        <td colspan="3">Total</td>
                        <td>Rp. `+rupiah(response.total)+`</td>    
                    </tr>
                    `);
                },
                error: function(err){
                    alert('data tidak ditemukan');
                }
            });
        })
    </script>
@endpush
