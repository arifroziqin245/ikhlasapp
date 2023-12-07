@extends('layout.salesMain')
@section('container')
    <div class="row">

        {{-- ----------- --}}

        {{-- -------------- --}}
        <div class="col-lg-12">
            <div class="card">
                @if (session()->has('success'))
                    <div class="alert alert-success col container-filter" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @foreach ($order as $c)
                    <div class="d-flex justify-content-between bg-info">
                        <h5 class="card-header  text-white mt-0"><img src="assets/images/users/user-3.jpg"
                                class="rounded-circle thumb-sm mr-1"> ## {{ $c->nama_custs }} ## </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Jumlah</th>
                                        <th>Nama Barang</th>
                                        <th>Total</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $total = 0; ?>
                                    @foreach (App\Models\DetilOrder::where('id_order', $c->id)->get() as $item)
                                        <tr>
                                            <td>{{ $item->jumlah }} {{ $item->satuan }}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>Rp. {{ number_format($item->total, 0, ',', '.') }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <button type="button" class="btn btn-outline-info btn-sm editdata" value="{{ $item->id }}"><i class="far fa-edit"></i></button> --}}
                                                    <form action="/sales/{{ $item->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-outline-danger btn-sm"
                                                            onclick="return confirm('Are you sure?')"><i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $total += $item->total; ?>
                                    @endforeach
                                    <tr>
                                        <td colspan="2">Total</td>
                                        <td>Rp. {{ number_format($total, 0, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table><!--end /table-->

                            <div class="row d-flex justify-content-end mx-2 my-2">
                                <button type="button"
                                    class="btn btn-primary waves-effect waves-light edit-{{ $c->id }}"
                                    data-id="{{ $c->id }}">Edit Row</button>
                                <div class="tombol-{{ $c->id }}" style="display: none">
                                    <button type="button" class="btn btn-secondary waves-effect neworder"
                                        data-id="{{ $c->id }}" data-nama="{{ $c->nama_custs }}">New Row</button>
                                    <button type="button"
                                        class="btn btn-success waves-effect waves-light cancel-{{ $c->id }}">Cancle</button>
                                </div>
                            </div>
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                    @push('js2')
                        <script>
                            $(document).on('click', '.neworder', function(e) {
                                $('#tambahOrder').modal('show')
                                let id = $(this).data('id')
                                $('#id_order').val(id)

                            });

                            $(document).on('click', '.edit-{{ $c->id }}', function(e) {
                                e.preventDefault()
                                $('.edit-{{ $c->id }}').hide()
                                $('.tombol-{{ $c->id }}').show()
                            });

                            $(document).on('click', '.cancel-{{ $c->id }}', function(e) {
                                e.preventDefault()
                                $('.edit-{{ $c->id }}').show()
                                $('.tombol-{{ $c->id }}').hide()
                            })
                        </script>
                    @endpush
                @endforeach
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    <div class="modal fade" id="tambahOrder" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambahan Orderan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <h4 class="mt-0 header-title">Form Order Baru</h4>
                    {{-- <p class="text-muted mb-4">Menambahkan daftar orderan baru dengan pencarian lewat form ini.</p> --}}
                    <form class="form-barang" action="/sl-store" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nambar">Nama Barang</label>
                            <select class="select2 form-control mb-3 custom-select" id="barang"
                                style="width: 100%; height:36px;">
                                <option>Select</option>
                                @foreach ($inventory as $iven)
                                    <option value="{{ $iven->id }}">{{ $iven->nama_barang }} (
                                        {{ number_format($iven->harga, 0, ',', '.') }} / {{ $iven->satuan }} )</option>
                                @endforeach
                            </select>
                            {{-- <small id="emailHelp" class="form-text text-muted">Ketikkan kata kunci untuk memudahkan
                                        pencarian
                                        barang.</small> --}}
                        </div>
                        <div class="form-group row has-success">
                            <div class="row mx-1">
                                <div class="col-sm-6 mt-1">
                                    <input type="number" class="form-control form-control-success bijian" min="0"
                                        id="bijian" name="bijian" placeholder="Untuk jumlah bijian">
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <input type="number" class="form-control form-control-success tertentu" min="0"
                                        id="tertentu" name="tertentu" placeholder="untuk satuan tertentu">
                                    <div class="kodi badge badge-purple d-flex justify-content-center mt-1"></div>
                                    {{-- menampilan nama satuan --}}
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <select name="keterangan" id="keterangan" class="form-control">
                                        <option value="&nbsp;">Pilih keterangan</option>
                                        <option value="Sudah dibawa">Sudah dibawa</option>
                                        <option value="Jangan tulis nota">Jangan tulis nota</option>
                                        <option value="Harga spesial">Harga spesial</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" id="id_order" name="id_order">
                            <input type="hidden" name="nama_barang" class="nama_barang">
                            <input type="hidden" name="satuan" class="satuan">
                            <input type="hidden" name="harga" class="harga">
                            <input type="hidden" name="harga_satuan" class="harga_satuan">
                        </div>
                        <button type="submit" class="btn btn-primary" id="tambah" name="tambah">Submit</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>

    {{-- Modal Edit --}}
    <!-- sample modal content -->
    <div class="modal fade modaleditdata" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Basic Form</h4>
                                <p class="text-muted mb-4">Basic example to demonstrate Bootstrap’s form styles.</p>
                                <form action="#">
                                    <div id="error_message"></div>
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="hidden" name="id" id="id">
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                                            value="{{ old('nama_barang') }}">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" id="category" name="category"
                                            value="{{ old('category') }}">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            value="{{ old('harga') }}">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <input type="text" class="form-control" id="satuan" name="satuan"
                                            value="{{ old('satuan') }}">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="isi">Isi</label>
                                        <input type="text" class="form-control" id="isi" name="isi"
                                            value="{{ old('isi') }}">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                    </div>
                                    {{-- <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select name="status_barang" id="status_barang" class="form-control">
                                        <option value="habis">Habis</option>
                                        <option value="ready">Ready</option>
                                    </select>
                                </div> --}}
                                </form>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                    <button id="update" class="btn btn-primary waves-effect waves-light">Ubah data</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- end Modal Edit --}}
@endsection

@push('js')
    <script>
        $(document).on('change', '#barang', function(e) {
            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ url('/ab') }}/" + id,
                success: function(response) {
                    if (response.status == "401") {
                        $('.kodi').html('Data Tidak Tersedia')
                    } else {
                        $('.kodi').html(response.data.satuan)
                    }

                    $('.nama_barang').val(response.data.nama_barang)
                    $('.satuan').val(response.data.satuan)
                    $('.harga').val(response.data.harga)
                    $('.harga_satuan').val(response.data.harga_satuan)
                }
            });
        })

        $(document).on('click', '.editdata', function(e) {
        var id = $(this).val();
        console.log(id);
        / $.ajax({
        type: "post",
            url: "{{ url('/el') }}/" + ,
            success:
        })
        })
    </script>
@endpush
