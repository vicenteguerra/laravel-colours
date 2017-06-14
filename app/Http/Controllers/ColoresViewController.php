<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Colour;

class ColoresViewController extends Controller
{
    public function index(){
      $colores = Colour::all();
      return View::make("colores", array('colores' => $colores));
    }

    public function random(){
      $color = dechex(rand("0x000000", "0xFFFFFF"));
      return View::make("random", array('color' => strtoupper($color)));
    }

}
