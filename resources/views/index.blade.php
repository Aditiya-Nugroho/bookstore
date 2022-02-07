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
                    <img src="{{ asset('assets/img/sword.png') }}">
                    <h5>
                        Aksi
                    </h5>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi earum doloremque ullam perspiciatis
                        obcaecati
                    </p>
                </div>
                <div class="col-md-4 btn btn-outline-danger img-kategori">
                    <img src="{{ asset('assets/img/sword.png') }}">
                    <h5>
                        Romantis
                    </h5>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi earum doloremque ullam perspiciatis
                        obcaecati
                    </p>
                </div>
                <div class="col-md-4 btn btn-outline-success img-kategori">
                    <img src="{{ asset('assets/img/sword.png') }}">
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
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail">Detail Buku</a>
                            <a href="{{ url('/beli') }}" class="btn btn-beli">Beli Buku</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cver2.jpg') }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOBODY KNOW ABOUT YOU</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail">Detail Buku</a>
                            <a href="#" class="btn btn-beli">Beli Buku</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cver2.jpg') }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOBODY KNOW ABOUT YOU</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content. lore
                            </p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail">Detail Buku</a>
                            <a href="#" class="btn btn-beli">Beli Buku</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cver2.jpg') }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOBODY KNOW ABOUT YOU</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail">Detail Buku</a>
                            <a href="#" class="btn btn-beli">Beli Buku</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cver2.jpg') }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOBODY KNOW ABOUT YOU</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail">Detail Buku</a>
                            <a href="#" class="btn btn-beli">Beli Buku</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cver2.jpg') }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOBODY KNOW ABOUT YOU</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="{{ url('/detail') }}" class="btn btn-detail">Detail Buku</a>
                            <a href="#" class="btn btn-beli">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
