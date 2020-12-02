<style type="text/css">
    .warna {
        color: red;
    }
</style>
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
            </form>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('home')}}"><img src="{{url ('assets/img/logo.png')}}" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'text-warning' : null }}" href="{{ route('home')}}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('tentang-sekolah') ? 'text-warning' : null }}" href="{{ route('tentang-sekolah')}}">Tentang sekolah</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is('kegiatan/*', 'kegiatan-harian','kegiatan-besar') ? 'text-warning' : null }}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kegiatan</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('kegiatan-harian') ? 'text-danger' : null }}" href="{{ route('kegiatan-harian')}}">Kegiatan Harian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('kegiatan-besar') ? 'text-danger' : null }}" href="{{ route('kegiatan-besar')}}">Kegiatan Besar</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('fasilitas') ? 'text-warning' : null }}" href="{{ route('fasilitas')}}">Fasilitas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('hubungi') ? 'text-warning' : null }}" href="{{ route('hubungi')}}">Hubungi Kami</a>
                        </li>
                        @auth
                        <li class="nav-item ">
                            <a href="">Status Akun:<span class="nav-link {{ Auth::user()->status_verifikasi == false ? 'text-danger' : 'text-success' }}">
                                    {{ Auth::user()->status_verifikasi == false ? 'Akun Belum Terverifikasi' : 'Akun Terverifikasi' }}</span></a>
                        </li>
                        <li class="nav-item dropdown py-4">
                            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                {{ Auth::user()->name}}
                            </button>
                            <form action="{{ route('logout')}}" method="POST">
                                @csrf

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('siswa-tagihan') }}">Bayar Tagihan</a>
                                    @if (session('error-murid'))
                                    <div class="dropdown-item alert alert-danger" role="alert">
                                        {{session('error-murid')}}
                                    </div>
                                    @endif
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="https://drive.google.com/drive/u/0/my-drive">Link tugas</a>
                                    <div class="dropdown-divider"></div>
                                    <button class="dropdown-item warna" type="submit">Logout</button>
                                </div>
                            </form>

                        </li>


                        @endauth




                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->