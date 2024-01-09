<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('logreg') }}/style.css" />
    <title>Login | Sobat Sehat</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" class="sign-in-form" action="{{ route('login') }}">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required
                            autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" value="Sign" class="btn solid" />

                </form>
                <form class="sign-up-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Masukkan Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Masukkan Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm Password">
                    </div>

                    <input type="submit" class="btn" value="Daftar" />

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum Punya Akun ?</h3>
                    <p>
                        Jangan Bingung Segera daftarkan diri anda sebagai Costumer Kami disini!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="{{ asset('logreg') }}/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Mempunyai Akun ?</h3>
                    <p>
                        Silahkan Tekan Tombol dibawah ini dan login.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{ asset('logreg') }}/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset('logreg') }}/app.js"></script>
</body>

</html>
