<!-- Navbar Custom Menu -->
<div class="navbar-custom-menu">
    
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu list-unstyled text-center">

                <li class="has-submenu  {{ ($active === "inventory") ? 'active' : '' }}">
                    <a href="/inventory">
                        <i class="mdi mdi-table-large"></i>
                        Data Barang
                    </a>
                </li>

                <li class="has-submenu {{ ($active === "change") ? 'active' : '' }}">
                    <a href="/change">
                        <i class="mdi mdi-timetable"></i>
                        Data Perubahan
                    </a>
                </li>
                
                <li class="has-submenu {{ ($active === "order") ? 'active' : '' }}">
                    <a href="/order">
                        <i class="mdi mdi mdi-playlist-edit "></i>
                       Order List
                    </a>
                </li>

                {{-- <li class="has-submenu">
                    <a href="nota">
                        <i class="mdi mdi mdi-printer"></i>
                       Nota
                    </a>
                </li> --}}


            </ul>
            <!-- End navigation menu -->
        </div> <!-- end navigation -->
    </div> <!-- end container-fluid -->
</div>
<!-- end left-sidenav-->