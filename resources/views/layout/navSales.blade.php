<!-- Navbar Custom Menu -->
<div class="navbar-custom-menu">

    <div class="container-fluid ">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu list-unstyled d-flex justify-content-center">

                <li class="has-submenu {{ ($active === "orderbr") ? 'active' : '' }}">
                    <a href="/sales">
                        <i class="mdi mdi-table-large"></i>
                        Order Barang
                    </a>
                </li>

                <li class="has-submenu {{ ($active === "list") ? 'active' : '' }}">
                    <a href="/sl">
                        <i class="mdi mdi mdi-playlist-edit"></i>
                        Order List
                    </a>
                </li>

                <li class="has-submenu {{ ($active === "nota") ? 'active' : '' }}">
                    <a href="/not">
                        <i class="mdi mdi mdi-note-text"></i>
                        Nota
                    </a>
                </li>



            </ul>
            <!-- End navigation menu -->
        </div> <!-- end navigation -->
    </div> <!-- end container-fluid -->
</div>
<!-- end left-sidenav-->
