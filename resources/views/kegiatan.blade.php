@extends('layouts.app')

@section('content')
    <br>
    <div class="row column text-center">
        <div>
            <h4>KEGIATAN</h4>
            <h4>JTIF UNIVERSITAS NEGERI SURABAYA</h4>
        </div>
    </div>
    <hr>

    <div class="row small-up-2 large-up-2">
        @foreach($listkegiatan as $kegiatan)
            <div class="column">
                <h3 style="font-size: 28px">{{$kegiatan->namakegiatan}}<small></small></h3>
                <img style="width: 100%; height: 200px" class="thumbnail" src="{{asset('img/kegiatan/'.$kegiatan->foto)}}">
                <p>{{ str_limit($kegiatan->deskripsi,200,'...') }}
                    <a href="{{route('detailkegiatan',['id' => $kegiatan->id])}}" class="button expanded">Detail</a>
                    <br>
                    <br>
            </div>
        @endforeach
    </div>

@endsection