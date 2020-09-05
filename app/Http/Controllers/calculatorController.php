<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{

  public function tabung(Request $request) {
    $alas = $request->input('alasT');
    $tinggi = $request->input('tinggiT');
    $result = 0;
    
    $result= $alas * $tinggi;        
    
    return redirect('')->with('Hasiltabung','Volume Tabung adalah: ' . $result);       
  }

  public function bola(Request $request) {
    $jari = $request->input('jariB');       
    $phi = 3.14;
    $result = 0;

    $result = 4/3 * $phi * $jari * $jari * $jari;
    
    return redirect('')->with('Hasilbola','Volume Bola adalah: ' . $result);       
  }

  public function kerucut(Request $request) {
    $phi = 3.14;
    $jari = $request->input('jariK');
    $tinggi = $request->input('tinggiK');
    $result = 0;

    $result = 1/3 * $phi * $jari * $jari * $tinggi;

    return redirect('')->with('Hasilkerucut','Volume Kerucut adalah: ' . $result);
  }
}
