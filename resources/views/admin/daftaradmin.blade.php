@extends('admin.mainadmin')
@section('title')
    Kategori Buku
@endsection
@section('konten')
    <div class="col-md-12">

        <div class="page-header">
            <div class="page-title d-flex">
                <h3>Daftar Admin</h3>
                <a href={{ url('/tambahadmin') }} type="button" class="btn btn-primary btn-sm ml-4">Tambah</a>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="default-ordering" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Nama</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Caesar Vance</td>
                                <td class="text-center"><button class="btn btn-primary btn-sm">update</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>Nama</th>
                                <th class="invisible"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
