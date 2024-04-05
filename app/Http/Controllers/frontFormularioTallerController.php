<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontFormularioTallerController extends Controller
{
    public function invoke()
    {
        return view('fronttaller-lugar');
    }
}
