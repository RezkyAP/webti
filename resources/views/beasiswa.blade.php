@extends('layouts.app')

@section('content')
    <br>
    <div class="row column text-center">
        <div>
            <h4>BEASISWA</h4>
            <h4>UNIVERSITAS NEGERI SURABAYA</h4>
        </div>
    </div>
    <hr>

    <div class="row small-up-2 large-up-2">
        @foreach($listbeasiswa as $beasiswa)
            <div class="column">
                <h3 style="font-size: 25px">{{$beasiswa->namabeasiswa}}</h3>
                <img style="width: 100%; height: 200px" class="thumbnail" src="{{asset('img/beasiswa/'.$beasiswa->foto)}}">
                <p style="font-size: 18px"></p>
                <p>{{ str_limit($beasiswa->deskripsi,200,'...') }}
                    <a href="{{route('detailbeasiswa',['id' => $beasiswa->id])}}" class="button expanded">Detail</a>
                <br>
                <br>
            </div>
        @endforeach
    </div>


@endsection