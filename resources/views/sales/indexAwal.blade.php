@extends('layout.salesMain')
@push('css')
    <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
@endpush
{{-- -------------- --}}
@section('container')
<div class="modal fade modal_tambah_cust" id="tambahCustomer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Input Customer Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form-inline" role="form" method="POST" action="/sales/tcust">
                    @csrf 
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group ">
                                <label class="sr-only" for="nama_cust">Nama Customer</label>
                                <input type="text" class="form-control" id="nama_cust" name="nama_cust" placeholder="Enter Name">
                            </div>        
                        </div>        
                        
                        <div class="col-sm-4">
                            <div class="form-group m-l-10">
                                <label class="sr-only" for="exampleInputPassword2">Lokasi</label>
                                <select name="lokasi_cust" id="lokasi_cust" class="form-control">
                                    <option disabled >Pilih Lokasi</option>
                                    <option value="Comal">Comal</option>
                                    <option value="Pemalang">Pemalang</option>
                                    <option value="Karanganyar">Karanganyar</option>
                                    <option value="Bojong">Bojong</option>
                                    <option value="Sragi">Sragi</option>
                                    <option value="Doro">Doro</option>
                                    <option value="Kesesi">Kesesi</option>
                                    <option value="Paninggaran">Paninggaran</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary ml-2">Tambah</button>
                
                </form>    
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">        
                @if (session()->has('success'))
                    <div class="alert alert-success border-0" role="alert">
                        <strong>Well done !</strong>  {{ session('success') }}

                       
                    </div>
                @endif
                <h4 class="mt-0 header-title">Pilih Lokasi Orderan Anda</h4>
                <div class="btn-group mb-2 mb-md-0">
                    <button type="button" class="btn btn-primary btn-skew btn-square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Cml - Pml<i class="mdi mdi-chevron-down"></i></span></button>
                    <div class="dropdown-menu">
                        @foreach ($pemalang as $pml)
                        <div class="alert alert-dismissible fade show" role="alert">
                            <form action="/sales/{{ $pml->id }}" method="post">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="close" onclick="return confirm('Are you sure?')">
                                        <span aria-hidden="true"><i class="mdi mdi-close text-danger"></i></span>
                                    </button>
                            </form>  
                            <a class="dropdown-item" href="/salesnew/{{ $pml->id }}">{{ $pml->nama_cust }}</a>
                        </div>          
                    @endforeach
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-secondary dropdown-item" data-toggle="modal" data-animation="bounce" data-target=".modal_tambah_cust">New Customer</button>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group mb-2 mb-md-0">
                    <button type="button" class="btn btn-pink btn-skew  btn-square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Kry - Kdw <i class="mdi mdi-chevron-down"></i></span></button>
                    <div class="dropdown-menu">
                        @foreach ($kdwdankry as $kry)
                            <div class="alert alert-dismissible fade show" role="alert">
                                <form action="/sales/{{ $kry->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="close" onclick="return confirm('Are you sure?')">
                                            <span aria-hidden="true"><i class="mdi mdi-close text-danger"></i></span>
                                        </button>
                                </form>  
                                <a class="dropdown-item" href="/salesnew/{{ $kry->id }}">{{ $kry->nama_cust }}</a>
                            </div>          
                        @endforeach
                        
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-secondary dropdown-item" data-toggle="modal" data-animation="bounce" data-target=".modal_tambah_cust">New Customer</button>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group mb-2 mb-md-0">
                    <button type="button" class="btn btn-success btn-skew  btn-square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Bjg - Srg <i class="mdi mdi-chevron-down"></i></span></button>
                    <div class="dropdown-menu">
                        @foreach ($bojong as $bjg)
                        <div class="alert alert-dismissible fade show" role="alert">
                            <form action="/sales/{{ $bjg->id }}" method="post">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="close" onclick="return confirm('Are you sure?')">
                                        <span aria-hidden="true"><i class="mdi mdi-close text-danger"></i></span>
                                    </button>
                            </form>  
                            <a class="dropdown-item" href="/salesnew/{{ $bjg->id }}">{{ $bjg->nama_cust }}</a>
                        </div>          
                    @endforeach
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-secondary dropdown-item" data-toggle="modal" data-animation="bounce" data-target=".modal_tambah_cust">New Customer</button>
                    </div>
                </div><!-- /btn-group -->                                            
                <div class="btn-group mb-2 mb-md-0">
                    <button type="button" class="btn btn-warning btn-skew  btn-square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Doro <i class="mdi mdi-chevron-down"></i></span></button>
                    <div class="dropdown-menu">
                        @foreach ($doro as $dro)
                            <div class="alert alert-dismissible fade show" role="alert">
                                <form action="/sales/{{ $dro->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="close" onclick="return confirm('Are you sure?')">
                                            <span aria-hidden="true"><i class="mdi mdi-close text-danger"></i></span>
                                        </button>
                                </form>  
                                <a class="dropdown-item" href="/salesnew/{{ $dro->id }}">{{ $dro->nama_cust }}</a>
                            </div>          
                        @endforeach
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-secondary dropdown-item" data-toggle="modal" data-animation="bounce" data-target=".modal_tambah_cust">New Customer</button>
                    </div>
                </div><!-- /btn-group -->      
                <div class="btn-group mb-2 mb-md-0">
                    <button type="button" class="btn btn-info btn-skew  btn-square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Kesesi <i class="mdi mdi-chevron-down"></i></span></button>
                    <div class="dropdown-menu">
                        @foreach ($kesesi as $kss)
                            <div class="alert alert-dismissible fade show" role="alert">
                                <form action="/sales/{{ $kss->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="close" onclick="return confirm('Are you sure?')">
                                            <span aria-hidden="true"><i class="mdi mdi-close text-danger"></i></span>
                                        </button>
                                </form>  
                                <a class="dropdown-item" href="/salesnew/{{ $kss->id }}">{{ $kss->nama_cust }}</a>
                            </div>          
                        @endforeach
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-secondary dropdown-item" data-toggle="modal" data-animation="bounce" data-target=".modal_tambah_cust">New Customer</button>
                    </div>
                </div><!-- /btn-group -->      
                <div class="btn-group mb-2 mb-md-0">
                    <button type="button" class="btn btn-dark btn-skew  btn-square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Paninggaran <i class="mdi mdi-chevron-down"></i></span></button>
                    <div class="dropdown-menu">
                        @foreach ($paninggaran as $png)
                        <div class="alert alert-dismissible fade show" role="alert">
                            <form action="/sales/{{ $png->id }}" method="post">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="close" onclick="return confirm('Are you sure?')">
                                        <span aria-hidden="true"><i class="mdi mdi-close text-danger"></i></span>
                                    </button>
                            </form>  
                            <a class="dropdown-item" href="/salesnew/{{ $png->id }}">{{ $png->nama_cust }}</a>
                        </div>          
                    @endforeach
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-secondary dropdown-item" data-toggle="modal" data-animation="bounce" data-target=".modal_tambah_cust">New Customer</button>
                    </div>
                </div><!-- /btn-group -->      
            </div><!--end card-body--> 
        </div><!--end card-->        
    </div> <!-- end col -->

    
    {{-- Modal --}}
</div> <!-- end row --> 

@endsection
{{-- --------------- --}}
@push('js')
<script src="/assets/plugins/repeater/jquery.repeater.min.js"></script>
<script src="/assets/pages/jquery.form-repeater.js"></script>
<script src="/assets/plugins/select2/select2.min.js"></script>

{{--  --}}
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
<script src="assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
<script src="assets/plugins/clockpicker/jquery-clockpicker.min.js"></script>
<script src="assets/plugins/colorpicker/jquery-asColor.js"></script>
<script src="assets/plugins/colorpicker/jquery-asGradient.js"></script>
<script src="assets/plugins/colorpicker/jquery-asColorPicker.min.js"></script>
<script src="assets/plugins/select2/select2.min.js"></script>

<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

<script src="assets/pages/jquery.forms-advanced.js"></script>
@endpush