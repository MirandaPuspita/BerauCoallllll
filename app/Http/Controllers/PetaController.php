<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function peta()
    {
        return view('frontend.peta');
    }
}
