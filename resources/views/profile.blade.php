@extends('templates.main')
@section('title')
    Beli Buku
@endsection
@section('konten')
    <div class=" container">
        <div class="row make-center">
            <div class="col-md-8 outline-beli">
                <h3>
                    Profile Pribadi
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

                        <div class="col-md-6">
                            <select class="form-select" multiple aria-label="multiple select example">
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
                    </div>
                    <div class="make-center">
                        <a href="{{ url('/#') }}" class="btn btn-detail mt-2 ">Save</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
