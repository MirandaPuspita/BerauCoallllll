<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class SyaratKetentuanController extends Controller
{
    public function index()
    {
        $sektor = DB::table('sektor_perizinan')
            ->select('*')
            ->get();
        $perizinan = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 1)
            ->get();

        $perizinan2 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 2)
            ->get();

        $perizinan3 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 3)
            ->get();

        $perizinan4 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 4)
            ->get();

        $perizinan5 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 5)
            ->get();

        $perizinan6 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 6)
            ->get();

        $perizinan7 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 7)
            ->get();

        $perizinan8 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 8)
            ->get();

        $perizinan9 = DB::table('sub_sektor_perizinan')
            ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
            ->where('sub_sektor_perizinan.id_sektor', '=', 9)
            ->get();
        $jenis = DB::table('jenis_perizinan')
            ->select('*')
            ->get();

        // dd($sektor, $perizinan);
        return view('/frontend/syaratketentuan', ['sektor' => $sektor, 'perizinan' => $perizinan, 'perizinan2' => $perizinan2, 'perizinan3' => $perizinan3, 'perizinan4' => $perizinan4, 'perizinan5' => $perizinan5, 'perizinan6' => $perizinan6, 'perizinan7' => $perizinan7, 'perizinan8' => $perizinan8, 'perizinan9' => $perizinan9, 'jenis' => $jenis]);
    }

    public function sektor()
    {
        $sektor = DB::table('sektor_perizinan')->pluck('nama_sektor', 'id_sektor');
        return view('/frontend/syaratketentuan', compact('sektor'));
    }

    public function perizinan()
    {
        $id_sektor = $_POST['id_sektor'];
        $perizinan = DB::table('sub_sektor_perizinan')->where("id_sektor", $id_sektor)->pluck('nama_perizinan', 'id_sub');
        return  response()->json($perizinan);
        $msg = "This is a simple message.";
    }

    public function insertform()
    {
    }
}
