<!-- Navbar Custom Menu -->
<div class="navbar-custom-menu">

    <div class="container-fluid ">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu list-unstyled d-flex justify-content-center">

                <li class="has-submenu {{ ($active === "dashboard") ? 'active' : '' }}">
                    <a href="/boss">
                        <i class="mdi mdi-monitor"></i>
                        Dashboard
                    </a>
                </li>

                <li class="has-submenu {{ ($active === "inventoryb") ? 'active' : '' }}">
                    <a href="/invenBoss">
                        <i class="mdi mdi mdi-playlist-edit"></i>
                        Inventory
                    </a>
                </li>

                <li class="has-submenu {{ ($active === "orderb") ? 'active' : '' }}">
                    <a href="/orderBoss">
                        <i class="mdi mdi-table-large"></i>
                        Laporan
                    </a>
                </li>



            </ul>
            <!-- End navigation menu -->
        </div> <!-- end navigation -->
    </div> <!-- end container-fluid -->
</div>
<!-- end left-sidenav-->
