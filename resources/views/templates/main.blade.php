<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid container">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="60" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="{{ url('/') }}">
                BookStore
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Aksi</a></li>
                            <li><a class="dropdown-item" href="#">Romantis</a></li>
                            <li><a class="dropdown-item" href="#">Kriminal</a></li>
                        </ul>
                    </li>
                </div>
            </div>
            <div class="d-flex akun nav-link ">
                <a href="{{ url('/profile') }}" type="button" class=" btn btn-warning">
                    Profile
                </a>
            </div>
            {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Pencarian</button>
            </form> --}}
        </div>
    </nav>
    @yield('konten')

    <footer class="footer_area section_padding_130_0">
        <div class="container">
            <div class="row">
                <!-- Single Widget-->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Footer Logo-->
                        <div class="footer-logo mb-3"></div>
                        <p>Jangan lupa baca bukumu yang sudah kamu beli karena ilmu berasal dari buku.</p>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-md-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">Kategori</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Romantis</a></li>
                                <li><a href="#">Aksi</a></li>
                                <li><a href="#">Kriminal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    @yield('js')


    <script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- <script data-require="jquery@3.1.1" data-semver="3.1.1"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
</body>

</html>
