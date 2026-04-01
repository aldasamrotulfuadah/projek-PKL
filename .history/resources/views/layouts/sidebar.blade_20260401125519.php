        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" href="{{ " style="gap:4px;">
                <img src="{{ asset('foto/logo1.png') }}" style="width:80px; height:auto;" alt="Foto">
                <div class="sidebar-brand-text">Masuk.in</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ $menuDashboard ?? '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Admin
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item {{ $menuAdminUser ?? '' }}">
                <a class="nav-link" href="{{ route('user') }}">
                    <i class="fas fa-user"></i>
                    <span>Data User</span></a>
                    
                    <!-- Divider -->
                    <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Menu Bidang
                </div>
                <!-- Nav Item - Charts -->
                <li class="nav-item {{ $menuSuratMasuk ?? '' }}">
                    <a class="nav-link" href="{{ route('suratmasuk') }}">
                        <i class="fas fa-tasks"></i>
                        <span>Surat Masuk</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item {{ $menuSuratKeluar ?? '' }}">
                    <a class="nav-link" href="{{ route('suratkeluar') }}">
                        <i class="fas fa-tasks"></i>
                        <span>Surat Keluar</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
        <!-- End of Sidebar -->