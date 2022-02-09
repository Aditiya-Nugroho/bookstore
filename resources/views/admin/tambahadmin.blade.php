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
                            Tambah Admin
                        </h3>
                        <div class="form-buku row">
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="username" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="nama" required>
                            </div>
                        </div>
                        <div class="container mt-5">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
