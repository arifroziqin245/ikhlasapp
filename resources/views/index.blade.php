@extends('layout.main')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <div class="col-lg-6">
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
                                                <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                <h5>Nancy Flanary</h5>
                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat Customer</p>
                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                <div class="mt-2 align-item-center">
                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$34800.00</h5>
                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="text-center">
                                                <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                <h5>Donald Gardner</h5>
                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat Customer</p>
                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                <div class="mt-2 align-item-center">
                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$31200.00</h5>
                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="text-center">
                                                <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                <h5>Matt Rosales</h5>
                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat Customer</p>
                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                <div class="mt-2 align-item-center">
                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$29200.00</h5>
                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel_best_saler" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel_best_saler" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-gradient3">
                                <div class="">
                                    <div class="card-icon">
                                        <i class="far fa-smile"></i>
                                    </div>
                                    <h2 class="font-weight-bold text-white">5</h2>
                                    <p class="text-white mb-0 font-16">Top 5 Transaksi Bulan Ini</p>                                            
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body dash-info-carousel">                                        
                                <div id="carousel_review" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="text-center">
                                                <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                <h5>Nancy Flanary</h5>
                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat Customer</p>
                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                <div class="mt-2 align-item-center">
                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$34800.00</h5>
                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="text-center">
                                                <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                <h5>Donald Gardner</h5>
                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat Customer</p>
                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                <div class="mt-2 align-item-center">
                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$31200.00</h5>
                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="text-center">
                                                <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                <h5>Matt Rosales</h5>
                                                <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Alamat Customer</p>
                                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                                <div class="mt-2 align-item-center">
                                                    <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">$29200.00</h5>
                                                    <a class="btn btn-sm btn-primary text-light mb-2"><i class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel_best_saler" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel_best_saler" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                   
        
                        
                </div><!--end row-->
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="dripicons-user-group font-24 text-secondary"></i>
                                </div> 
                                <span class="badge badge-danger">Total Transaksi</span>
                                <h3 class="font-weight-bold">Rp. 2.432.323.000.00</h3>
                                {{-- <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>Up From Yesterday</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="dripicons-cart  font-24 text-secondary"></i>
                                </div> 
                                <span class="badge badge-info">Total Transaksi Bulan Ini</span>
                                <h3 class="font-weight-bold">Rp. 184.943.000.00</h3>
                                <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Up From Last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-12">
                    <div class="card carousel-bg-img">
                        <div class="card-body dash-info-carousel mb-0">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">                                            
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">Total Transaksi Bulan Ini</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-jewel bg-soft-pink"></i>
                                                    </div>
                                                    <h2 class="mt-0 font-weight-bold text-dark">Rp. 184.943.000.00</h2> 
                                                    <p class="mb-1 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>35.5%</span> Last 100 Subscriptions</p>
                                                </div>
                                            </div><!--end col-->                                                        
                                        </div><!--end row-->                                                    
                                    </div><!--end carousel-item-->
                                    <div class="carousel-item">
                                        <div class="row">                                            
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">CML - PML</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-basket bg-soft-info"></i>
                                                    </div>
                                                    <h2 class="mt-0 font-weight-bold text-dark">Rp. 34.128.000.00</h2> 
                                                    <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>21.5%</span> Down From Last week</p>
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
                                                    <h2 class="mt-0 font-weight-bold text-dark">Rp. 46.145.000.00</h2> 
                                                    <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>18.5%</span> Down From Last week</p>
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
                                                    <h2 class="mt-0 font-weight-bold text-dark">Rp. 39.658.000.00</h2> 
                                                    <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>19.5%</span> Down From Last week</p>
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
                                                    <h2 class="mt-0 font-weight-bold text-dark">Rp. 30.869.000.00</h2> 
                                                    <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>17.5%</span> Down From Last week</p>
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
                                                    <h2 class="mt-0 font-weight-bold text-dark">Rp. 47.428.000.00</h2> 
                                                    <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>25.5%</span> Down From Last week</p>
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
                                                    <h2 class="mt-0 font-weight-bold text-dark">Rp. 52.543.000.00</h2> 
                                                    <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>24.5%</span> Down From Last week</p>
                                                </div>
                                            </div><!--end col-->                                                        
                                        </div><!--end row-->                                                    
                                    </div><!--end carousel-item-->
    
                                    
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
                                            <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
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
                                            <img src="assets/images/flags/french_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
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
                                            <img src="assets/images/flags/spain_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
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
                                            <img src="assets/images/flags/russia_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
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
                                            <img src="assets/images/flags/italy_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
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
                                            <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
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
