<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>IKHLAS APP - SALES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />
 
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link href="/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    @stack('css')
</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/sales" class="logo">
                    <span>
                        <img src="/assets/images/fixlogo.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="/assets/images/cah_sales.jpg" alt="logo-large" class="logo-sm">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topbar-nav float-right mb-0">

          

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                       
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i>Logout</button>
                        </form>
                    </div>
                </li>
                <li class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link" id="mobileToggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
            </ul>

           

        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <div class="page-wrapper-img">
        <div class="page-wrapper-img-inner">
            <div class="sidebar-user media">
                <img src="/assets/images/fixlogo.png" alt="user" class="rounded-circle img-thumbnail mb-1">
                <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                <div class="media-body">
                    <h5 class="text-light">Mr. Sales Ikhlas </h5>
                    <ul class="list-unstyled list-inline mb-0 mt-2">
                        <li class="list-inline-item ">
                            <a href="/sales" class=""><i class="mdi mdi-monitor text-light"></i></a>
                        </li>
                        <li class="list-inline-item {{ ($active === "inventoryb") ? 'active' : '' }}">
                            <a href="/sl" class=""><i class="mdi mdi-playlist-edit text-light"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="/not" class=""><i class="mdi  mdi-note-text text-light"></i></a>
                        </li>
                        <li class="list-inline-item {{ ($active === "orderb") ? 'active' : '' }}">
                            <form action="/logout" method="POST">
                                @csrf
                                    <button class="rounded-circle display-none bg-transparent"><a href="#" class=""><i class="mdi mdi-power text-danger "></i></a></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right align-item-center mt-2">
                            <a href="/sales" class="btn btn-info px-4 align-self-center report-btn">Order</a>    
                        </div>
                        <h4 class="page-title mb-2"><i class="mdi mdi-monitor mr-2"></i>{{ $title }}</h4>
                        <div class="">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">IKHLASAPP</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">SALES</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                    <!--end page title box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <!-- end page title end breadcrumb -->
        </div>
        <!--end page-wrapper-img-inner-->
    </div>
    <!--end page-wrapper-img-->

    <div class="page-wrapper">
        <div class="page-wrapper-inner">

            <!-- Navbar Custom Menu -->
            @include('layout.navSales')
            <!-- end left-sidenav-->
        </div>
        <!--end page-wrapper-inner -->
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                {{-- <div class="row"> --}}
                @yield('container')
                {{-- </div><!--end row--> --}}

            </div><!-- container -->

            <footer class="footer text-center text-sm-left">
                &copy; 2022 IkhlasApp <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Arif R.</span>
            </footer>
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->

    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="https://apexcharts.com/samples//assets/irregular-data-series.js"></script>
    <script src="https://apexcharts.com/samples//assets/series1000.js"></script>
    <script src="https://apexcharts.com/samples//assets/ohlc.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/waves.min.js"></script>
    <script src="/assets/js/jquery.slimscroll.min.js"></script>
    <!-- App js -->
    <script src="/assets/js/app.js"></script>
    {{-- js filter --}}
    @stack('js2')
    @stack('js')
       
</body>

</html>
