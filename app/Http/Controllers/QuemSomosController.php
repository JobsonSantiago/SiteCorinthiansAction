<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    public function quemsomos(){
        return view('site.quemsomos');
    }
}