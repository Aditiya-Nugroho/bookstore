@extends('templates.main')
@section('title')
    Beli Buku
@endsection
@section('konten')
    <div class="outline-beli container">
        <div class="row">
            <div class="col-md-4">
                <picture class="img-full">
                    <img src="{{ asset('assets/img/cver.jpg') }}" alt="">
                    <div class="caption-buku make-center">
                        Judul Buku dan Harga 1 Buku
                    </div>
                </picture>
            </div>
            <div class="col-md-8">
                <h3>
                    Beli Buku
                </h3>
                <form action="" class="mt-4">
                    <div class="form-buku">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Address">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1"
                                    max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"
                                    pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="total" class="form-label">Total</label>
                            <h3>4444444</h3>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
