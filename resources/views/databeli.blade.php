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
                    <div class="form-buku row">
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Address">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="nik" class="form-label">Nik</label>
                            <input type="text" class="form-control" id="nik" placeholder="Nik" required
                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        </div>

                        <div class="col-md-6 mt-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="Phone" placeholder="+62" required
                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        </div>


                        <a href="{{ url('/#') }}" class="btn btn-detail mt-5 ">Beli</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
