@extends('layouts.app')

@section('content')
    <br>
    <div class="row column text-center">
        <div>
            <h3>INFORMASI SEPUTAR JURUSAN TEKNIK INFORMATIKA</h3>
            <h3>UNIVERSITAS NEGERI SURABAYA</h3>
        </div>
    </div>

    <hr>
    <div style="margin-left: 250px; margin-right: 250px">
        <h3 style="font-size: 25px" class="text-center" >{{$deskripsiinfo->namainfo}}</h3>
        <img style="width: 100%; height: 1000px" class="thumbnail" src="{{asset('img/info/'.$deskripsiinfo->foto)}}">
        <p style="font-size: 18px"></p>
        <p>{{($deskripsiinfo->deskripsi)}}</p>
        <hr>
        <br>
        <br>
    </div>


    <div class="column row">
        <div class="tabs-content" data-tabs-content="example-tabs">
        </div>
    </div>
@endsection



