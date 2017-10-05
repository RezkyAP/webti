<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class BeasiswaController extends Controller
{
    public function show(){
        return view('beasiswa',[
            'listbeasiswa' => Beasiswa::all()
        ]);
    }
}
