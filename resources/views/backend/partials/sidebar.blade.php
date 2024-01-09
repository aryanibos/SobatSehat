<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-blue elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('frontend') }}/img/logo.png" alt="AdminLTE Logo" width="200px" style="margin-left: 15px">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dashboard') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">{{ Auth::user()->name }}</a>
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
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (Auth::user()->status == 'a')
                    <li class="nav-item">
                        <a href="{{ route('jadwal') }}" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Jadwal Kegiatan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('saran-dan-dukungan') }}" class="nav-link">
                            <i class="nav-icon fas fa-inbox"></i>
                            <p>
                                Saran & Dukungan
                            </p>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'a')
                    <li class="nav-item">
                        <a href="{{ route('lokasi') }}" class="nav-link">
                            <i class="nav-icon fas fa-map-marked"></i>
                            <p>
                                kelola Lokasi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('berita') }}" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                kelola Berita
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                kelola Pengguna
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                        class="nav-link">
                        <button>
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
