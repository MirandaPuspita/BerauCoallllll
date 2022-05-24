<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class PermohonanController extends Controller
{
    public function permohonan()
    {
        return view('frontend.permohonan');
    }
}
