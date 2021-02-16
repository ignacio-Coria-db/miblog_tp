<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('paginas.about');
    }

    public function index(){
        return view('paginas.index');
    }
}
