@extends('layouts.app')

@section('content')

<div class="row columns">
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container" style="height: auto; margin-top: 30px">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
            <img  src="{{asset('img/5.jpg')}}" style="width: 100%; height: 500px; object-fit: cover">
        </li>
        <li class="orbit-slide ">
            <img  src="{{asset('img/6.jpg')}}" style="width: 100%; height: 500px; object-fit: cover">
        </li>

    </ul>
</div>
    </div>
<hr>
<br>
<div class="row column text-center">
    <div>
        <h1 style="font-family: 'Footlight MT Light'">SELAMAT DATANG DI JURUSAN TEKNIK INFORMATIKA</h1>
        <h3 style="font-family: 'Footlight MT Light'">UNIVERSITAS NEGERI SURABAYA</h3>
        <a href="sejarah" style="font-family: 'Footlight MT Light'" class="button large">Selengkapnya</a>
    </div>
</div>

<br>
<hr>

<div class="row small-up-2 large-up-4">
    <h4>Berita JTIF</h4>
    <div class="column">
        <img class="thumbnail" src="{{asset('img/2.jpg')}}">
        <h5>X-PROJECT 2.0</h5>
        <a href="#" class="button expanded">Detail</a>
    </div>
    <div class="column">
        <img class="thumbnail" src="{{asset('img/3.jpg')}}">
        <h5>Code-Jam 2016</h5>
        <a href="#" class="button expanded">Detail</a>
    </div>
    <div class="column">
        <img class="thumbnail" src="{{asset('img/7.jpg')}}">
        <h5>X-PROJECT 2.0</h5>
        <a href="#" class="button expanded">Detail</a>
    </div>

    <div class="column">
        <img class="thumbnail" src="{{asset('img/8.jpg')}}">
        <h5>Pecinta Alam JTIF</h5>
        <a href="#" class="button expanded">Detail</a>
    </div>
</div>


<hr>


<div class="row small-up-2 large-up-4">
    <h4>Struktur Organisasi</h4>
    <img src="{{asset('img/struktur organisasi.jpg')}}">
</div>


<hr>

<div class="row small-up-2 large-up-2">
    <h4>Berita Akademik</h4>
    <div class="column">
        <h3>Awesome blog post title <small>3/6/2015</small></h3>
        <img class="thumbnail" src="http://placehold.it/850x350">
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
        <a href="#" class="button expanded">Detail</a>
    </div>
    <div class="column">
        <h3>Awesome blog post title <small>3/6/2015</small></h3>
        <img class="thumbnail" src="http://placehold.it/850x350">
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
        <a href="#" class="button expanded">Detail</a>
    </div>

</div>




@endsection