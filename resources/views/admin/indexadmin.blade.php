@extends('admin.mainadmin')
@section('title')
    Admin
@endsection
@section('konten')
    <div class="col-md-12">
        <div class="page-header">
            <div class="page-title d-flex">
                <h3>Daftar Buku</h3>
                <a href={{ url('/tambahbuku') }} type="button" class="btn btn-primary btn-sm ml-4">Tambah</a>
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="default-ordering" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Cover</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Serial</th>
                                <th>Salary</th>
                                <th>Stock</th>
                                <th>Sinopsis</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cover</td>
                                <td>Judul</td>
                                <td>Penulis</td>
                                <td>Penerbit</td>
                                <td>Tahun</td>
                                <td>Serial</td>
                                <td>Salary</td>
                                <td>Stock</td>
                                <td>Sinopsis</td>
                                <td class="text-center"><button class="btn btn-primary btn-sm">update</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Cover</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Serial</th>
                                <th>Salary</th>
                                <th>Stock</th>
                                <th>Sinopsis</th>
                                <th class="invisible"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
