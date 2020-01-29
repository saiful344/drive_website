<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user_style.css') }}" rel="stylesheet">
    <link href="{{ asset('icon/smk.png') }}" rel="shortcut icon" type="x-icon">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container h100">
                <a class="navbar-brand text-white poppins-bold" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <ul class="navbar-nav h100">
                    <li class="nav-item h100">
                        <a id="navbarDropdown" class="nav-profile nav-link dropdown-toggle h100" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{asset('icon/profile.png')}}" alt="" class=" h100">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="background-top"></div>
        <main class="mt-4 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-content">
                        <div class="row">
                            <div class="col-12">
                                <iframe src="{{asset('file/try.pdf')}}#toolbar=0" width="100%" height="500px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>