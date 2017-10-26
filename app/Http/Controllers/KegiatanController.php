<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;

class KegiatanController extends Controller
{
    public function show(){
        return view('kegiatan',[
            'listkegiatan' => Kegiatan::all()
        ]);
    }
    public function spec(Request $request){
        return view('detailkegiatan',[
            'deskripsikegiatan' => Kegiatan::find($request->id)
        ]);
    }
}
