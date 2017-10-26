@extends('layouts.app')

@section('content')
    <br>

    <div class="row column text-center">
        <div style="font-family: 'Footlight MT Light'">
            <h4>BEASISWA MAHASISWA JTIF</h4>
            <h4>UNIVERSITAS NEGERI SURABAYA</h4>
            <h4><i>Raih Impianmu Bersama Beasiswa Mahasiswa JTIF</i></h4>
        </div>
    </div>

    <hr>

    <div style="margin-left: 250px; margin-right: 250px">
                <h3 style="font-size: 25px" class="text-center" >{{$deskripsibeasiswa->namabeasiswa}}</h3>
                <img style="width: 100%; height: 200px" class="thumbnail" src="{{asset('img/beasiswa/'.$deskripsibeasiswa->foto)}}">
                <p style="font-size: 18px"></p>
                <p>{{($deskripsibeasiswa->deskripsi)}}</p>
                <hr>
                    <br>
                    <br>
    </div>


    <div class="column row">
        <div class="tabs-content" data-tabs-content="example-tabs">
        </div>
    </div>



<@endsection

