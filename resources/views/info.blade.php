@extends('layouts.app')

@section('content')
    <br>
    <div class="row column text-center">
        <div>
            <h4>INFO & PENGUMUMAN</h4>
            <h4>JTIF UNIVERSITAS NEGERI SURABAYA</h4>
        </div>
    </div>
    <hr>

    <div class="row small-up-2 large-up-2">
        @foreach($listinfo as $info)
            <div class="column">
                <h3 style="font-size: 25px">{{$info->namainfo}}</h3>
                <img style="width: 100%; height: 350px" class="thumbnail" src="{{asset('img/info/'.$info->foto)}}">
                <p style="font-size: 18px"></p>
                <p>{{ str_limit($info->deskripsi,200,'...') }}
                    <a href="{{route('detailinfo',['id' => $info->id])}}" class="button expanded">Detail</a>
                    <br>
                    <br>
            </div>
        @endforeach
    </div>


@endsection