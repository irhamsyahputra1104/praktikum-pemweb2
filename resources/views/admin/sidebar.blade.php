<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <i class="bi bi-hospital mx-3"></i>
        <span class="brand-text font-weight-light">Admin Puskesmas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @auth
                    @if (Auth::check())
                        <a href="{{ route('profile.edit') }}" class="d-block">{{ strtoupper(Auth::user()->name) ?? '' }}</a>
                        <span class="text-primary">Role: {{ Auth::user()->role }}</span>
                    @endif
                @endauth
                @guest
                    <a href="#" class="d-block">Guest</a>
                @endguest
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pasien" class="nav-link">
                                <i class="bi bi-file-earmark-person fs-4 mr-2"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/paramedik" class="nav-link">
                                <i class="bi bi-clipboard-plus fs-4 mr-2"></i>
                                <p>Paramedik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/periksa" class="nav-link">
                                <i class="bi bi-card-checklist fs-4 mr-2"></i>
                                <p>Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kelurahan" class="nav-link">
                                <i class="bi bi-pin-map-fill fs-4 mr-2"></i>
                                <p>kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/unit_kerja" class="nav-link">
                                <i class="bi bi-person-vcard fs-4 mr-2"></i>
                                <p>Unit Kerja</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
