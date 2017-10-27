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
        /*@media screen and (min-width: 601px){*/
        /*.topnav2 {*/
        /*overflow: hidden;*/
        /*background-color: #333;*/
        /*}*/
        /*.topnav2 a.sm {*/
        /*display: none;*/
        /*}*/
        /*.topnav2.responsive{*/
        /*margin-top: 52px;*/
        /*float: none;*/
        /*z-index: 1;*/
        /*display: block;*/
        /*position: absolute;*/
        /*}*/
        /*.topnav2.responsive a.sm {*/
        /*float: none;*/
        /*display: block;*/
        /*text-align: left;*/
        /*}*/
        /*.topnav a {*/
        /*float: left;*/
        /*display: block;*/
        /*color: #f2f2f2;*/
        /*text-align: center;*/
        /*padding: 14px 16px;*/
        /*text-decoration: none;*/
        /*font-size: 17px;*/
        /*}*/
        /*}*/
        /*.topnav {*/
        /*overflow: hidden;*/
        /*background-color: #333;*/
        /*}*/

        /*.topnav a:hover {*/
        /*background-color: #ddd;*/
        /*color: black;*/
        /*}*/


        /*.topnav .icon {*/
        /*display: none;*/
        /*}*/
        /*@media screen and (max-width: 600px) {*/
        /*.topnav a{*/
        /*float: left;*/
        /*display: none;*/
        /*color: #f2f2f2;*/
        /*text-align: center;*/
        /*padding: 14px 16px;*/
        /*text-decoration: none;*/
        /*font-size: 17px;*/
        /*}*/
        /*.topnav2 a {display: none;}*/
        /*.topnav a.icon {*/
        /*float: right;*/
        /*display: block;*/
        /*}*/
        /*.topnav.drp{display: none;}*/
        /*}*/

        /*@media screen and (max-width: 600px) {*/
        /*.topnav.responsive {position: relative;}*/
        /*.topnav.responsive .icon {*/
        /*position: absolute;*/
        /*right: 0;*/
        /*top: 0;*/
        /*}*/
        /*.topnav.responsive a {*/
        /*float: none;*/
        /*display: block;*/
        /*text-align: left;*/
        /*}*/
        /*.topnav2 a.sm {*/
        /*display: none;*/
        /*}*/
        /*.topnav2.responsive a.sm {*/
        /*float: none;*/
        /*display: block;*/
        /*text-align: left;*/
        /*}*/
        /*}*/



        /** {*/
        /*box-sizing: border-box;*/
        /*}*/


        @media screen and (min-width: 601px) {

            html, body {
                padding: 0;
                margin: 0;
            }

            nav.menu {
                background-color: #0080ff;
                list-style: none;
            }

            nav.menu:after {
                content: "";
                display: block;
                clear: both;
                visibility: hidden;
            }

            nav.menu > li.item {
                padding: 10px;
                float: left;
                color: #fff;
                position: relative;
                cursor: pointer;
            }

            nav.menu > li.item.active {
                background-color: #201b5b;
            }

            nav.menu > li.item.active.list li{
                display: none;
            }

            .topnav ul.list {
                list-style: none;
                position: absolute;
                left: -900px;
                top: 38px;
                padding: 0;
                margin: 0;
                z-index: 2;
                background-color: #0080ff;
                display: none;
            }

            li.item.active ul.list {
                left: 0;
                display: block;
            }

            ul.list > li {
                float: left;
                padding: 10px;
                width: 100%;
            }

            .topnav a.icon {
                float: right;
                display: none;
            }
        }
        @media screen and (max-width: 600px) {
            topnav ul.list > li {
                float: left;
                padding: 10px;
            }
            nav.menu > li.item.active > .list{
                background-color: #201b5b;
                display: block;
                font-size: 10px;

            }
            nav.menu > li.item > .list{
                /*background-color: #201b5b;*/
                display: none;
            }

            .topnav li{
                cursor: pointer;
                background-color: #0d71bb;
                color: white;
                font-size: 15px;
                display: none;
                padding:15px;
            }

            .list li{
                background-color: #0d71bb;
                color: white;
                font-size: 15px;
                padding: 5px;
            }
            /*topnav ul.list {*/
            /*display: none;*/
            /*list-style: none;*/
            /*left: -900px;*/
            /*top: 38px;*/
            /*padding: 0;*/
            /*margin: 0;*/
            /*z-index: 2;*/
            /*background-color: #0080ff;*/
            /*}*/

            topnav ul li {
                list-style: none;
                position: relative;
                left: -900px;
                top: 38px;
                padding: 0;
                margin: 0;
                z-index: 2;
                background-color: #0080ff;
            }

            topnav li.item.active ul.list {
                padding: 0px;
                left: 0;
                display: block;
            }

            /*topnav ul.list > li {*/
            /*float: left;*/
            /*padding: 10px;*/
            /*}*/

            .topnav a {
                float: left;
                display: none;
                color: #f3f3f3;
                text-align: center;
                text-decoration: none;
                font-size: 15px;
            }


            .topnav a.icon {
                float: right;
                display: block;
                padding:14px;
            }
            .topnav.responsive li{
                width:100%;
                float: left;
                display: block;
                position: relative;}
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
        }
    </style>
</head>
<body>

<!-- Start Top Bar -->
<div class="topnav" id="myTopnav">
    <nav class="menu" style="background-color: #0080ff">

        <li class="item">
            <span class="title"><a href="home">Teknik Informatika</a></span>
        </li>
        <li class="item dropdown">
            <span class="title">Profil</span>
            <ul class="list">
                <li><a href="sejarah">Sejarah</a></li>
                <li><a href="visimisi">Visi & Misi</a></li>
            </ul>
        </li>

        <li class="item dropdown">
            <span class="title">Dosen & Staff</span>
            <ul class="list">
                <li><a href="#">Dosen</a></li>
                <li><a href="#">Staff</a></li>
            </ul>
        </li>
        <li class="item dropdown">
            <span class="title">Program Studi</span>
            <ul class="list">
                <li><a href="prodiPTI">S1 PTI</a></li>
                <li><a href="prodiMI">D3 MI</a></li>
                <li><a href="prodiTI">S1 TI</a>
                <li><a href="prodiSI">S1 S1</a></li>
            </ul>
        </li>
        <li class="item">
            <span class="title">Sarana Prasarana</span>
        </li>
        <li class="item">
            <span class="galeri">Galeri</span>
        </li>
        <li class="item dropdown">
            <span class="title">Berita Akademik</span>
            <ul class="list">
                <li><a href="tatatertib">Tata Tertib</a></li>
                <li><a href="beasiswa">Beasiswa</a></li>
                <li><a href="info">Info</a></li>
                <li><a href="kegiatan">Kegiatan</a></li>
            </ul>
        </li>

        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunctions()">&#9776;</a>
    </nav>
    <br>

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
    $(function(){

        $('li.item').click(function(){
            $(this).nextUntil().removeClass('active')
            $(this).prevUntil().removeClass('active')
            $(this).toggleClass('active')
        })

    })
    function myFunctions() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</body>
</html>
