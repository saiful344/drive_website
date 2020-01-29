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
                <form class="form-inline form-cari col-12 col-md-4 p-0">
                    <div class="form-group has-search w100">
                        <span class="form-control-feedback"><img src="{{asset('icon/search.png')}}" alt=""></span>
                        <input type="text" class="form-control input-form-cari w100" placeholder="Cari document">
                    </div>
                </form>
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
                            <div class="col-md-4 mt-3 mb-3">
                                <div class="card card-content">
                                <div class="title mb-2">
                                    <h4 class="poppins-bold color-purple title-card m-0">kategori</h4>
                                    <div class="border-title"></div>
                                </div>
                                    <div class="table-data-file">
                                        <table class="w100">
                                            <tr class="data-file">
                                                <th>KTP</th>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </td>
                                            </tr>
                                            <tr class="data-file">
                                                <th>Akte Kelahiran</th>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </td>
                                            </tr>
                                            <tr class="data-file">
                                                <th>Kartu Keluarga</th>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </td>
                                            </tr>
                                            <tr class="data-file">
                                                <th>KTP</th>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </td>
                                            </tr>
                                            <tr class="data-file">
                                                <th>Akte Kelahiran</th>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </td>
                                            </tr>
                                            <tr class="data-file">
                                                <th>Kartu Keluarga</th>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-1 mt-3 mb-3">
                                <div class="card card-content">
                                    <div class="table-data-file mt-5">
                                        <table class="w100">
                                            <tr class="border-bottom data-file">
                                                <td><img src="{{asset('icon/file-check.png')}}" alt=""></td>
                                                <th><a href="/view/1">Kartu Tanda Penduduk (KTP)</a></th>
                                                <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-option btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="img-option" src="{{asset('icon/option.png')}}" alt="option">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom data-file">
                                                <td><img src="{{asset('icon/file-check.png')}}" alt=""></td>
                                                <th><a href="/view/1">Kartu Keluarga (KK)</a></th>
                                                <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-option btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="img-option" src="{{asset('icon/option.png')}}" alt="option">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom data-file">
                                                <td><img src="{{asset('icon/file.png')}}" alt=""></td>
                                                <th><a href="/view/1">Surat Izin Mengemudi (SIM)</a></th>
                                                <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-option btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="img-option" src="{{asset('icon/option.png')}}" alt="option">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Hapus</a>
                                                        <a class="dropdown-item" href="#">Download</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom data-file">
                                                <td><img src="{{asset('icon/file.png')}}" alt=""></td>
                                                <th><a href="/view/1">Kartu Tanda Penduduk (KTP)</a></th>
                                                <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-option btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="img-option" src="{{asset('icon/option.png')}}" alt="option">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Hapus</a>
                                                        <a class="dropdown-item" href="#">Download</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom data-file">
                                                <td><img src="{{asset('icon/file.png')}}" alt=""></td>
                                                <th><a href="/view/1">Kartu Keluarga (KK)</a></th>
                                                <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-option btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="img-option" src="{{asset('icon/option.png')}}" alt="option">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Hapus</a>
                                                        <a class="dropdown-item" href="#">Download</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom data-file">
                                                <td><img src="{{asset('icon/file.png')}}" alt=""></td>
                                                <th><a href="/view/1">Surat Izin Mengemudi (SIM)</a></th>
                                                <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-option btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="img-option" src="{{asset('icon/option.png')}}" alt="option">
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Hapus</a>
                                                        <a class="dropdown-item" href="#">Download</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 offset-md-4 mt-4 div-btn-upload-document">
                                <button type="button" class="btn-upload-document w100 btn" data-toggle="modal" data-target="#uDocument">Upload Document</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="modal fade" id="uDocument" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body modal-body-upload">
                <h5 class="mt-3">Upload Document</h5>
                <form action="" id="form-upload">
                    <div class="form-group form-group-upload">
                        <input type="file" name="file">
                        <h5><img src="{{asset('icon/upload.png')}}" alt=""> Drag & Drop</h5>
                        <p>Klik untuk memilih file</p>
                    </div>
                    <div class="form-group">
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="1">Kartu Tanda Penduduk</option>
                            <option value="2">Kartu Keluarga</option>
                            <option value="3">Surat Izin Mengemudi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn-upload w100 btn">Upload Document</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script>
        $(document).ready(function(){
            $('form input').change(function () {
                $('form p').text(this.files.length + " file(s) selected");
            });
        });
    </script>
</body>
</html>