<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller implements IController
{
    static function saudar(){
        return 'Bom tarde, ';
    }
}
