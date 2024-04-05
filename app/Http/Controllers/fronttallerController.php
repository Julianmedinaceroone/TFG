<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fronttallerController extends Controller
{
    public function invoke()
    {
        return view('fronttaller');
    }
}
