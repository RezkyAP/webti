<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    public function show(){
        return view('info',[
            'listinfo' => Info::all()
        ]);
    }
    public function spec(Request $request){
        return view('detailinfo',[
            'deskripsiinfo' => Info::find($request->id)
        ]);
    }
}
