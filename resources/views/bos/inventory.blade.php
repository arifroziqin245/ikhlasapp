@extends('layout.bosMain')
@push('css')
    <!-- DataTables -->
    <link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endpush
@section('container')
    <div class="card">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success col container-filter" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <ul class="col container-filter categories-filter mb-0" id="filter">
                    <li><a class="categories active" data-filter="*">All</a></li>

                    @foreach ($category as $iv)
                        <li><a class="categories" >{{ $iv->nama_category }}</a></li>
                    @endforeach
                </ul>
            </div><!-- End portfolio  -->
        </div>
        <!--end card-body-->
    </div>
    <!--end card-->

    <table id="datatable" class="table table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga Termurah</th>
                {{-- <th>Satuan</th> --}}
                <th>Category</th>
                {{-- <th>Isi</th> --}}
                <th>Harga Satuan</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>

        <tbody>
            @foreach ($inventory as $iv)
                <tr>
                    <td>{{ $iv->nama_barang }}</td>
                    <td>{{ $iv->harga }} / <span class="badge ">{{ $iv->satuan }} ({{ $iv->isi }})</span></td>
                    {{-- <td>{{ $iv->satuan }}</td> --}}
                    <td>{{ $iv->category }}</td>
                    {{-- <td>{{ $iv->isi }}</td> --}}
                    <td>{{ $iv->harga_satuan }}</td>
                    {{-- <td>
                        <div class="btn-group">
                            <a href="inventory/{{ $iv->id }}" class="btn btn-outline-warning btn-sm"><i
                                    class="far fa-eye"></i></a>
                           
                            <form action="inventory/{{ $iv->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')"><i
                                        class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-md-6 col-lg-3">

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

    </div>
    <!--end col-->
@endsection

@push('js')
    <script>
        $(document).on('click', '.editdata', function(e) {
            e.preventDefault();
            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: '/inventory/' + id + '/edit',
                success: function(response) {
                    if (response.status == 401) {
                        $('#success_message').addClass('alert alert-warning');
                        $('#success_message').text(response.errors);
                    } else {
                        $('.modaleditdata').modal('show')
                        $('#id').val(response.data.id);
                        $('#nama_barang').val(response.data.nama_barang);
                        $('#category').val(response.data.category);
                        $('#harga').val(response.data.harga);
                        $('#satuan').val(response.data.satuan);
                        $('#isi').val(response.data.isi);
                        $('#status_barang').val(response.data.status_barang);
                    }
                }
            });
        });

        $(document).on('click', '#update', function(e) {
            e.preventDefault();
            var id = $("#id").val();
            var data = {
                'nama_barang': $('#nama_barang').val(),
                'category': $('#category').val(),
                'harga': $('#harga').val(),
                'satuan': $('#satuan').val(),
                'isi': $('#isi').val(),
                'status_barang': $('#status_barang').val(),
                '_token': '{{ csrf_token() }}'
            };
            console.log(data)
            $.ajax({
                type: "PUT",
                url: '/inventory/' + id,
                data: data,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        window.location.reload(true);
                    } else {
                        $('#error_message').text(response.errors);
                        $('#error_message').addClass('alert alert-danger');
                    }
                }
            });
        });
    </script>
    <!-- Required datatable js -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="/assets/pages/jquery.datatable.init.js"></script>
@endpush
