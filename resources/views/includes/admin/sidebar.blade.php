<!-- Sidebar -->
@if (Auth::user()->roles == 'admin')
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
    @else
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
        @endif


        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" @if (Auth::user()->roles == 'user')
            href="{{route('siswa-tagihan')}}" @else href="{{route('Dashboard')}}" @endif>
            @if (Auth::user()->roles == 'user')
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-car"></i>
            </div>
            @else
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-motorcycle"></i>
            </div>
            @endif
            @if (Auth::user()->roles == 'user')
            <div class="sidebar-brand-text mx-3">Siswa <sup>TK</sup></div>
            @else
            <div class="sidebar-brand-text mx-3">Admin <sup>TK</sup></div>
            @endif
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        @if (Auth::user()->roles == 'user')

        <li class="nav-item active">
            <a class="nav-link" href="{{route('siswa-tagihan')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>History Pembayaran</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-arrow-left"></i>
                <span>Home</span></a>
        </li>
        @else
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('Dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{route('verifikasi')}}">
                <i class="fas fa-fw fa-user-check"></i>
                <span>Verifikasi Akun
                    @if (App\User::where('status_verifikasi',false)->count() > 0)
                    <span class="badge badge-warning ">{{ App\User::where('status_verifikasi',false)->count() }}</span>
                    @endif
                </span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{route('pendaftaran')}}">
                <i class="fas fa-fw fa-users"></i>
                <span>Pendaftaran</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true">
                <i class="fas fa-fw fa-user-tie"></i>
                <span>Guru</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('data-guru.index')}}">Data Guru</a>
                    <a class="collapse-item" href="{{route('matapelajaran.index')}}">Matapelajaran</a>
                    <!--<a class="collapse-item" href="utilities-animation.html">Data Kelas</a>-->
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-user"></i>
                <span>Siswa</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('data-siswa.index') }}">Data Siswa</a>
                    <a class="collapse-item" href="{{ route('data-kelas.index') }}">Data Kelas</a>
                    <a class="collapse-item" href="{{ route('data-spp.index') }}">Data Spp</a>
                </div>
            </div>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('entri-pembayaran.index') }}">
                <i class="fas fa-fw fa-file-invoice-dollar"></i>
                <span>Transaksi Pembayaran</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('history-pembayaran.index') }}">
                <i class="fas fa-fw fa-file-invoice-dollar"></i>
                <span>History Pembayaran</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('jadwal-siswa.index') }}">
                <i class="fas fa-fw fa-file-invoice-dollar"></i>
                <span>Jadwal Siswa</span></a>
        </li>
        @endif

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->