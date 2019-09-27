<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerSquare extends Controller
{
    public function getNumSquare(){

      $type = 'number';
      $bg_col = 'orange';
      $my_arr = [];

      for ($i=0; $i < 10; $i++) {

        $my_arr[]=$i;
      }

      return view('number', compact('type', 'bg_col', 'my_arr'));
    }

    public function getWrdSquare(){
      $type = 'letters';
      $bg_col = 'red';
      $my_arr = range('A', 'Z');
      return view('alphabet', compact('type', 'bg_col', 'my_arr'));
    }

    // private function get($max);
}
