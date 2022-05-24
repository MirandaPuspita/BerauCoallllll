<!-- ======= Top Bar ======= -->
<div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">+62554 23465</a>
            <i class="bi bi-phone-fill phone-icon"></i>+62554 23400
        </div>

        {{-- @auth
            {{-- <ul>
                <div class="cta d-none d-md-block">
                    <li class="nav-item dropdown">
                        <a class="">{{ auth()->user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profil Saya</a>
                            <hr>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </li>
                </div>
            </ul> --}}

        <!-- Example single danger button -->
        {{-- <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    {{ auth()->user()->name }}
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        @else
            <div class="cta d-none d-md-block">
                <a href="/login" class="">Login</a>
            </div>
        @endauth --}}

    </div>
</div>
