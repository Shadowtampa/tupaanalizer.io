<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index (){
        $data ['titulo'] = "Eu te amo demais <3";

        return view('contato', $data);
    }
}
