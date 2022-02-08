@extends('templates.main')
@section('title')
    Home
@endsection
@section('konten')
    <div class="welcome-page">
        <div class="container">
            <div class="make-center">
                <div class="col-md-7">
                    <div class="judul">
                        <h1>
                            Ayo GAUSAH<span> Baca</span>
                            Bukumu
                        </h1>
                    </div>
                    <div class="deks">
                        <p>Lorem obcaecati quaerat cumque id nemo eaque. Numquam! quaerat cumque id nemo eaque. Numquam!</p>
                    </div>
                    <a href="#" class="btn btn-main">Let's Go</a>
                </div>
                <div class="col-md-5">
                    <div class="img-full">
                        <img src="{{ asset('assets/img/welcome.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category mt-5">
        <div class="container">
            <h3>
                Kategori
            </h3>
        </div>
        <div class="button-category container mt-4">
            <div class="all-kategori row">
                <div class="col-md-4 btn btn-outline-primary img-kategori">
                    <div class="icon-kategori">
                        <svg id="Layer_1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path
                                d="m23.414.587a2.022 2.022 0 0 0 -1.941-.513 16.461 16.461 0 0 0 -6.479 3.983l-9.476 9.475a14.58 14.58 0 0 0 -4.376-1.522 1 1 0 0 0 -.286 1.979 12.632 12.632 0 0 1 5.353 2.387l-3.709 3.71-.793-.793a1 1 0 1 0 -1.414 1.414l3 3a1 1 0 1 0 1.414-1.414l-.793-.793 3.709-3.71a12.609 12.609 0 0 1 2.387 5.354 1 1 0 0 0 .99.856.881.881 0 0 0 .144-.011 1 1 0 0 0 .847-1.13 14.515 14.515 0 0 0 -1.522-4.376l9.475-9.476a16.52 16.52 0 0 0 4.01-6.574 1.994 1.994 0 0 0 -.54-1.846zm-4.885 7.005-9.167 9.168a11.15 11.15 0 0 0 -.988-1.134 11.36 11.36 0 0 0 -1.133-.988l9.167-9.167a14.384 14.384 0 0 1 5.584-3.464 14.453 14.453 0 0 1 -3.463 5.585z" />
                        </svg>
                    </div>
                    <h5>
                        Aksi
                    </h5>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi earum doloremque ullam perspiciatis
                        obcaecati
                    </p>
                </div>
                <div class="col-md-4 btn btn-outline-danger img-kategori">
                    <div class="icon-kategori">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                            <path
                                d="M8.965,24H4a4,4,0,0,1-4-4V15a4,4,0,0,1,4-4h8.857a3.144,3.144,0,0,1,2.69,1.519l3.217-3.535a3.01,3.01,0,0,1,4.254-.2,3.022,3.022,0,0,1,.217,4.23l-6.8,7.637A10.012,10.012,0,0,1,8.965,24ZM4,13a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2H8.965a8.005,8.005,0,0,0,5.972-2.678l6.805-7.638a1.015,1.015,0,0,0-.072-1.421A1.029,1.029,0,0,0,20.942,10a1,1,0,0,0-.7.329L15.816,15.2A3.158,3.158,0,0,1,13.3,17.252l-5.161.738a1,1,0,0,1-.284-1.98l5.162-.737A1.142,1.142,0,0,0,12.857,13Zm7-3.926a1.986,1.986,0,0,1-1.247-.436C8.041,7.264,6,5.2,6,3.2A3.109,3.109,0,0,1,9,0a2.884,2.884,0,0,1,2,.817A2.884,2.884,0,0,1,13,0a3.109,3.109,0,0,1,3,3.2c0,2-2.041,4.064-3.754,5.439A1.986,1.986,0,0,1,11,9.074ZM9,2A1.115,1.115,0,0,0,8,3.2c0,.9,1.151,2.39,3.006,3.879C12.849,5.59,14,4.1,14,3.2A1.115,1.115,0,0,0,13,2a1.115,1.115,0,0,0-1,1.2,1,1,0,0,1-2,0A1.115,1.115,0,0,0,9,2Z" />
                        </svg>
                    </div>
                    <h5>
                        Romantis
                    </h5>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi earum doloremque ullam perspiciatis
                        obcaecati
                    </p>
                </div>
                <div class="col-md-4 btn btn-outline-success img-kategori">
                    <div class="icon-kategori">

                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                            <path
                                d="M19.9,3.091A4,4,0,0,0,14.9.153L13.176.646A2.981,2.981,0,0,0,12,1.3,2.981,2.981,0,0,0,10.824.646L9.1.153A4,4,0,0,0,4.105,3.091,5,5,0,0,0,0,8v7a5.006,5.006,0,0,0,5,5h6v2H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2H13V20h6a5.006,5.006,0,0,0,5-5V8A5,5,0,0,0,19.9,3.091ZM13,3.531a1,1,0,0,1,.725-.961l1.725-.493A2,2,0,0,1,18,4V7.938a2.006,2.006,0,0,1-1.45,1.921L13,10.873ZM6.8,2.4A1.993,1.993,0,0,1,8.55,2.077l1.725.493A1,1,0,0,1,11,3.531v7.342L7.45,9.859A2.006,2.006,0,0,1,6,7.938V4A1.987,1.987,0,0,1,6.8,2.4ZM22,15a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V8A3,3,0,0,1,4,5.184V7.938a4.014,4.014,0,0,0,2.9,3.845l3.451.987a6.019,6.019,0,0,0,3.3,0l3.451-.987A4.014,4.014,0,0,0,20,7.938V5.184A3,3,0,0,1,22,8Z" />
                        </svg>

                    </div>
                    <h5>
                        Kriminal
                    </h5>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi earum doloremque ullam perspiciatis
                        obcaecati
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="all-book ">
        <div class="container">
            <div class="d-flex make-center pt-5 text-w">
                <h3 style="width: max-content;">
                    Buku Tersedia
                </h3>
                <div class="desc-buku">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis rerum asperiores
                        explicabo dolorum nostrum blanditiis. Molestias sint quos, earum, a voluptate dolor aut cupiditate
                        itaque ipsam corporis porro non!
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-5 pb-5 ">
            <div class="card-book mb-5 d-flex container">
                <div class="container all-card row">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cver.jpg') }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">STAR WITHOUT MOON</h5>
                            <p class="card-text">
                                <span>Junaedi - </span>
                                <span>AryaDuta</span><br>
                                <span>Tahun terbit 29 February</span> <br>
                            </p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail make-center">Detail Buku</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cver2.jpg') }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOBODY KNOW ABOUT YOU</h5>
                            <p class="card-text">
                                <span>Junaedi - </span>
                                <span>AryaDuta</span><br>
                                <span>Tahun terbit 29 February</span> <br>
                            </p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail make-center">Detail Buku</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
