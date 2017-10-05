<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webti | Website Jurusan Teknik Informatika</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/foundation-icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        body {margin:0;}
        @media screen and (min-width: 601px){
            .topnav2 {
                overflow: hidden;
                background-color:#0080ff;
            }
            .topnav2 a.sm {
                display: none;
            }
            .topnav2.responsive{
                /*margin-top: 52px;*/
                /*margin-left: 74px;*/
                float: none;
                z-index: 1;
                display: block;
                position: absolute;
            }
            .topnav2.responsive a.sm {
                float: none;
                display: block;
                text-align: left;
            }
            .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
        }
        .topnav {
            overflow: hidden;
            background-color: #0080ff;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }


        .topnav .icon {
            display: none;
        }
        @media screen and (max-width: 600px) {
            .topnav a{

                float: left;
                display: none;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            .topnav2 a {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
            .topnav.drp{display: none;}
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
            .topnav2 a.sm {
                display: none;
            }
            .topnav2.responsive a.sm {
                float: none;
                display: block;
                text-align: left;
            }
        }

    </style>
</head>
<body>

<!-- Start Top Bar -->
<div class="topnav" id="myTopnav">
    <a href="home">Teknik Informatika</a>
    <div class="drp">
        <a href="#news" onclick="myFunction2()">Profil</a>
        <div class="topnav2" id="myTopnav2">
            <a href="#contact" class="sm" style="margin-left: 5px">Contact</a>
            <a href="#about" class="sm" style="margin-left: 5px">About</a>
        </div>
    </div>
    <div class="drp">
        <a href="#" onclick="myFunction2()">Dosen & Staff</a>
        <div class="topnav2" id="myTopnav2">
            <a href="dosen" class="sm" style="margin-left: 5px">Dosen</a>
            <a href="staff" class="sm" style="margin-left: 5px">Staff</a>
        </div>
    </div>
    <div class="drp">
        <a href="#" onclick="myFunction2()">Prodi</a>
        <div class="topnav2" id="myTopnav2">
            <a href="prodiPTI" class="sm" style="margin-left: 5px">S1 Pendidikan Teknologi Informasi</a>
            <a href="prodiMI" class="sm" style="margin-left: 5px">D3 Manajemen Informatika</a>
            <a href="prodiTI" class="sm" style="margin-left: 5px">S1 Teknik Informatika</a>
            <a href="prodiSI" class="sm" style="margin-left: 5px">S1 Sistem Informasi</a>
        </div>
    </div>
    <a href="sarana">Sarana & Prasarana</a>
    <a href="galeri">Galeri</a>
    <div class="drp">
        <a href="#" onclick="myFunction2()">Akademik</a>
        <div class="topnav2" id="myTopnav2">
            <a href="#" class="sm" style="margin-left: 5px">Berita Akademik</a>
            <a href="#" class="sm" style="margin-left: 5px">Cumlaude</a>
            <a href="#" class="sm" style="margin-left: 5px">Beasiswa</a>
            <a href="#" class="sm" style="margin-left: 5px">Juara</a>
        </div>
    </div>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>




    {{--<div class="top-bar-left">--}}
    {{--<ul class="menu">--}}
    {{--<img style="width: 100px; height: 100px " src="{{asset('img/logo.png')}}" />--}}
    {{--<li><a href="home"style="font-family: 'Bodoni MT'; font-size: 20px">Teknik Informatika</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="top-bar-right">--}}
    {{--<ul class="dropdown menu" data-dropdown-menu style="font-family: 'Bodoni MT'; font-size: 20px">--}}
    {{--<li class="menu-text"></li>--}}
    {{--<li>--}}
    {{--<a href="#">Profil</a>--}}
    {{--<ul class="menu vertical">--}}
    {{--<li><a href="sejarah" style="color: black">Sejarah</a></li>--}}
    {{--<li><a href="visimisi"  style="color: black">Visi & Misi</a></li>--}}
    {{--<li><a href="tatalokasi"  style="color: black">Tata Lokasi</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#">Dosen & Staff</a>--}}
    {{--<ul class="menu vertical">--}}
    {{--<li><a href="dosen" style="color: black">Dosen</a></li>--}}
    {{--<li><a href="#" style="color: black">Staff</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#">Prodi</a>--}}
    {{--<ul class="menu vertical">--}}
    {{--<li><a href="prodiPTI" style="color: black">S1 Pendidikan Teknologi Informasi</a></li>--}}
    {{--<li><a href="prodiMI" style="color: black">D3 Manajemen Informatika</a></li>--}}
    {{--<li><a href="prodiTI" style="color: black">S1 Teknik Informatika</a></li>--}}
    {{--<li><a href="prodiSI" style="color: black">S1 Sistem Informasi</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#">Sarana & Prasarana</a>--}}
    {{--<ul class="menu vertical">--}}
    {{--<li><a href="#" style="color: black">Ruang Kuliah</a></li>--}}
    {{--<li><a href="#" style="color: black">Lab RPL</a></li>--}}
    {{--<li><a href="#" style="color: black">Lab JARKOM</a></li>--}}
    {{--<li><a href="#" style="color: black">Lab SI</a></li>--}}
    {{--<li><a href="#" style="color: black">Lab MMK</a></li>--}}
    {{--<li><a href="#" style="color: black">Ruang Baca</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--<li><a href="galeri">Galeri</a></li>--}}
    {{--<li>--}}
    {{--<a href="#">Akademik</a>--}}
    {{--<ul class="menu vertical">--}}
    {{--<li><a href="#" style="color: black">Berita Akademik</a></li>--}}
    {{--<li><a href="#" style="color: black">Beasiswa</a></li>--}}
    {{--<li><a href="#" style="color: black">Cumlaude</a></li>--}}
    {{--<li><a href="#" style="color: black">Juara</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
</div>

<!-- End Top Bar -->

@yield('content')

<div class="callout large secondary">
    <div class="row">
        <div class="text-center">

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    function myFunction2() {
        var x = document.getElementById("myTopnav2");
        if (x.className === "topnav2") {
            x.className += " responsive";
        } else {
            x.className = "topnav2";
        }
    }
</script>
</body>
</html>
