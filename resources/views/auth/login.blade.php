<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login')</title>
    <link rel="stylesheet" href="{{ url('auth/style.css') }}">
</head>

<body>


    <div class="wrapper">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="email" id="email"
                    class="@error('email') is-invalid @enderror" required autofocus value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter password" name="password" id="password" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Login Now">
            </div>
            <div class="text">
                <h3>Belum memiliki akun? <a href="/register">Daftar Sekarang</a></h3>
            </div>
        </form>
    </div>
</body>

</html>
