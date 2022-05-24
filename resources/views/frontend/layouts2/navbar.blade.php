<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/"> <img src="{{ asset('frontend/images/berau.jpg') }}"> <img
                    src="{{ asset('frontend/images/sinarmas.png') }}"></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ request()->segment(1) ? '' : 'active' }}" href="/">Beranda</a></li>
                <li><a class="nav-link scrollto {{ request()->segment(1) == 'sopperizinan' ? 'active' : '' }}"
                        href="/sopperizinan">SOP Perizinan</a></li>
                {{-- <li><a class="nav-link scrollto {{ request()->segment(1) == 'perizinan' ? 'active' : '' }}"
                        href="/perizinan">Daftar Perizinan</a></li> --}}
                <li><a class="nav-link scrollto {{ request()->segment(1) == 'permohonan' ? 'active' : '' }}"
                        href="/permohonan">Permohonan Izin</a></li>
                {{-- <li class="dropdown"><a href="#"
                        class="{{ in_array(request()->segment(1), ['', 'perizinan']) ? 'active' : '' }}"><span>Daftar
                            Perizinan</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/syaratketentuan">Syarat dan Ketentuan</a></li>
                        <li><a href="/perizinan">Daftar Perizinan</a></li>
                    </ul>
                </li> --}}
                <li><a class="nav-link scrollto {{ request()->segment(1) == 'peta' ? 'active' : '' }}"
                        href="/peta">Peta</a></li>
                {{-- <li><a class="nav-link scrollto {{ request()->segment(1) == 'testimoni' ? 'active' : '' }}"
                        href="/testimoni">Testimoni</a></li> --}}
                <li><a class="nav-link scrollto {{ request()->segment(1) == 'hubungikami' ? 'active' : '' }}"
                        href="/hubungikami">Hubungi Kami</a></li>
                &nbsp;
                &nbsp;
                &nbsp;
                @auth
                    <li class="dropdown btn btn-outline-info"><a href="#"><span>{{ auth()->user()->name }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Profil Saya</a></li>
                            <hr class="dropdown-divider">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a class="nav-link btn btn-outline-info" href="/login">&nbsp;&nbsp;Login&nbsp;&nbsp;</a></li>
                @endauth
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
