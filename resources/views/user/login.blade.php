<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>login - Skanza Drive</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user_style.css') }}" rel="stylesheet">
    <link href="{{ asset('icon/smk.png') }}" rel="shortcut icon" type="x-icon">
</head>
<body class="h100 body-login">
    <div id="app" class="h100">
        <main class="py-4 h100">
            <div class="container h100">
                <div class="row justify-content-center row-login h100">
                    <div class="col-md-4">
                        <form method="POST" action="/login">
                            <div class="card card-login">
                                <div class="card-body">
                                    <div class="text-center mt-4">
                                        <img src="{{asset('icon/in_login.png')}}" alt="">
                                    </div>
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label class="poppins-medium" for="email">Email</label>
                                        <input id="email" type="email" class="input-login form-control @error('username') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Masukan Email" required autofocus="on">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-35">
                                        <label class="poppins-medium" for="password">Password</label>
                                        <input id="password" type="password" class="input-login form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-login mt-3">MASUK</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>