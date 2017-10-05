<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana;

class SaranaController extends Controller
{
    public function show(){
        return view('sarana',[
            'listsarana' => Sarana::all()
        ]);
    }
}
