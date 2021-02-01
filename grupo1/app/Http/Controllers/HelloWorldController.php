<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends BaseController
{


    public function retornarFrase($frase){
        return BaseController::saudar() . $frase;
    }

    public function  __construct()
    {

    }

    public static function saudar(){
        return 'Bom dia, ';
    }


}
