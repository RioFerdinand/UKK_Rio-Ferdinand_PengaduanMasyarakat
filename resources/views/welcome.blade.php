{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">

<title>Pengaduan Masyarakat Kawasan Leuwiliang</title>

<body style="background-color: aquamarine;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 title">
                <h2>Selamat Datang di Pengamas Racoon City!</h2>
                <p>Website dimana anda bisa melaporkan semua peristiwa diluar nalar.</p>
                <a href="/login" style="border: none;">Masuk</a>
                <a href="/register" style="border: none;">Registrasi</a>
            </div>
            <div class="col-md-6 image">
                <img src="{{ asset('foto/leon.png')}}">
            </div>
        </div>
    </div>
</body> --}}
<title>Pengamas Racoon City</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">
<style>
    .btn {
    padding: 18px 34px;
    font-size: 18px;
    font-weight: 700;
    display: inline-block;
    margin-right: 24px;
    margin-bottom: 24px;
    color: #fff;
    background-color: #6b64ec;
    border-color: black;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    line-height: 1.5;
    border-radius: 0.25;
    }
</style>

<body>
    <main class="contents" style="background-color: #B9E9FC;">
        <div class="row">
            <div class="content-wrapper">
                <h1>Selamat Datang di Pengamas Racoon City!</h1>
                <p>Website dimana anda bisa melaporkan semua peristiwa diluar nalar.</p>
                <a href="/login" class="btn">Masuk</a>
                <a href="/regsiter" class="btn">Registrasi</a>
            </div>

            <div class="content-wrapper">
                <img src="{{ asset('foto/leon.png')}}">
            </div>
        </div>
    </main>
</body>
</html>