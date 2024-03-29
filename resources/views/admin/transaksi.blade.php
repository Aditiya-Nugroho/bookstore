@extends('admin.mainadmin')
@section('title')
    Transaksi Buku
@endsection
@section('konten')
    <div class="col-md-12">
        <div class="page-header">
            <div class="page-title d-flex ">
                <h3>Daftar Transaksi Buku</h3>
                {{-- <button class="btn btn-primary btn-sm ml-4">Tambah</button> --}}
            </div>
        </div>

        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="default-ordering" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    id_customer
                                </th>
                                <th>
                                    Id Buku
                                </th>
                                <th>
                                    operator
                                </th>
                                <th>
                                    id_suser
                                </th>
                                <th>
                                    quantity
                                </th>
                                <th>
                                    total
                                </th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                                <td class="text-center"><button class="btn btn-primary btn-sm">update</button>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    id_customer
                                </th>
                                <th>
                                    Id Buku
                                </th>
                                <th>
                                    operator
                                </th>
                                <th>
                                    id_suser
                                </th>
                                <th>
                                    quantity
                                </th>
                                <th>
                                    total
                                </th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
