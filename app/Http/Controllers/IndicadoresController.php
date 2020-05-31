<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Indicadores;

class IndicadoresController extends Controller
{
    public function index(){
        $indicadores = Indicadores::all();
            echo"<pre>";
                print_r($indicadores);
            echo"</pre>";
    }
}
