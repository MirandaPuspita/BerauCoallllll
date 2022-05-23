<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Registrasi')</title>
    <link rel="stylesheet" href="{{ url('auth/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="/register" method="post">
            @csrf
            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" class="@error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email"
                    class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password"
                    class="@error('password') is-invalid @enderror" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="text" name="role" placeholder="Role" value="user" required hidden>

            <div class="input-box button">
                <input type="Submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Sudah memiliki akun? <a href="/login">Silahkan Login</a></h3>
            </div>
        </form>
    </div>
</body>

</html>
