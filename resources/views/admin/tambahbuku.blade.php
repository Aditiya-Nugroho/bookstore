@extends('admin.mainadmin')
@section('title')
    Admin
@endsection
@section('konten')
    <div class="col-md-12">


        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <form action="" class="mt-4">
                        <h3>
                            Tambah Buku
                        </h3>
                        <div class="form-buku row">
                            <div class="col-md-6">
                                <label for="juduluku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judulbuku" placeholder="Judul Buku" required>
                            </div>
                            <div class="col-md-6">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" placeholder="Alamat" required>
                            </div>
                            <div class="col-md-6">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="Penerbit" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahunterbit" placeholder="Tahun Terbit"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="serial" class="form-label">Serial Buku</label>
                                <input type="text" class="form-control" id="serial" required>
                            </div>
                            <div class="col-md-6">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" required>
                            </div>
                            <div class="col-md-6">
                                <label for="stock" class="form-label">Stock Buku</label>
                                <input type="text" class="form-control" id="stock" required>
                            </div>
                            <div class="col-md-12">
                                <label for="sinopsis" class="form-label">Sinopsis</label>
                                <textarea name="sinopsis" id="sinopsis" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                            <div class="container mt-5">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
