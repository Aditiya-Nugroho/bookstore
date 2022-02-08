@extends('templates.main')
@section('title')
    Detail Buku
@endsection
@section('konten')
    <div class="detail-buku container outline-beli">
        <div class="make-center ">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-full">
                        <img src="{{ asset('assets/img/cver.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="detail-teks">
                        <h1>
                            STAR WITHOUT MOON
                        </h1>
                        <span>Junaedi - </span>
                        <span> Penerbit AryaDuta</span><br>
                        <span> Stock Buku 5</span><br>
                        <span>Tahun terbit 29 February</span> <br>
                        <span> Serial Buku : 8696986986</span>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit accusantium illo autem laborum
                            error, quibusdam recusandae quo veritatis id ex unde enim, iste harum quam magnam minus velit
                            tempora nulla.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa placeat praesentium, voluptate
                            at aperiam deserunt sit perferendis temporibus molestiae unde aut dignissimos error sint amet
                            consectetur omnis quaerat optio ea.
                        </p>
                        <div class="d-flex">
                            <h4>
                                Rp 100.000,-
                            </h4>
                            <a href="{{ url('/beli') }}" class="btn btn-main" style="margin-left: 25px">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
