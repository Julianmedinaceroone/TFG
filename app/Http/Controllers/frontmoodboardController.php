<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontmoodboardController extends Controller
{
    public function invoke()
    {
        return view('frontmoodboard');
    }
}
