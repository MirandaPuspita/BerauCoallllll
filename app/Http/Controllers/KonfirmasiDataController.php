<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class KonfirmasiDataController extends Controller
{
    public function konfirmasidata()
    {
        // $permohonan = DB::table('datapemohon')
        //     ->select('*')->get();

        // $total_diajukan = DB::table('datapemohon')
        //     ->where('status', '=', 'diajukan')
        //     ->count();
        // return view('frontend.konfirmasidata', ['permohonan' => $permohonan, 'diajukan' => $total_diajukan]);
        return view('frontend.konfirmasidata');
    }
}
