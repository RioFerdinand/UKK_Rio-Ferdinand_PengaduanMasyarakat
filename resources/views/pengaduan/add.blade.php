    {{-- <h2>Form Pelaporan Masyarakat</h2>
    <form action="/pengaduan" enctype="multipart/form-data" method="post">
        @METHOD('POST')
        @csrf
        <label>ingin melaporkan kejadian apa hari ini?</label>
        <input type="text" name="isi_laporan">
        <input type="file" name="foto" id="foto">
        <div class="form-button">
            <input type="submit" value="Kirim" class="ybtn ybtn-accent-color">
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            <strong>{{ session('success') }}</strong>
        </div>
        @endif
    </form> --}}
@extends('layout.layout')
@section('content')
<title>AduhMas!</title>
<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/style.css">
<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/custom.css">

 <body class="fullpage" style="height: 100%;">
        <div id="form-section" class="container-fluid signin">
            <div class="form-holder">
                <!-- <div class="menu-holder">
                    <ul class="main-links">
                        <li><a class="normal-link" href="/register">Belum punya akun?</a></li>
                        <li><a class="sign-button" href="/register">Buat akun</a></li>
                    </ul>
                </div> -->
                <div class="signin-signup-form">
                    <div class="form-items card" style="margin-left: 2%; box-shadow:rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 1%;">
                        <div class="form-title">Form Laporan Pengaduan</div>
                        <form action="/pengaduan" enctype="multipart/form-data" method="post">
                            @METHOD('POST')
                            @csrf
                            <label>ingin melaporkan kejadian apa hari ini?</label>
                             <div class="form-text">
                            <input type="text" name="isi_laporan">
                            <input type="file" name="foto" id="foto">
                        </div>
                            <div class="form-button">
                                <input type="submit" value="Kirim" class="ybtn ybtn-accent-color">
                            </div>
                            @if (session('success'))
                            <div class="alert alert-success">
                                <strong>{{ session('success') }}</strong>
                            </div>
                            @endif
                        </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>