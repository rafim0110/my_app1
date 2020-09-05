<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }   

    public function proses(Request $request){

        $name = $request->nama;
        $umur = $request->umur;
        return view('proses', [
            'name' => $name,
            'umur' => $umur
        ]);
    }
}
