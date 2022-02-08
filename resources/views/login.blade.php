<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <title>Login </title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Buat Akun</h1>
                <span>Isi sesuai dengan data diri</span>
                <input class="mt-1" type="text" placeholder="UserName" />
                <input class="mt-1" type="email" placeholder="Email" />
                <input class="mt-1" type="password" placeholder="Password" />
                <button class="mt-1">Buat Akun</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Masuk</h1>
                <span>Login untuk masuk ke website</span>
                <input class="mt-1" type="email" placeholder="Email" />
                <input class="mt-1" type="password" placeholder="Password" />
                <button class="mt-1">Masuk</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Sudah Punya Akun?</h1>
                    <p>Jika sudah punya akun silahkan kamu login dengan akunmu</p>
                    <button class="ghost" id="signIn">Masuk</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hallo Sobat Baca!</h1>
                    <p>Pilih Buku -> Lihat Detail -> Beli Buku -> Dan Baca Bukumu</p>
                    <button class="ghost" id="signUp">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>
