<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumen = DB::table('dokumen')
            ->select('dokumen.*', 'persyaratan1.id_syarat')
            ->join('persyaratan1', 'persyaratan1.id_syarat', '=', 'dokumen.id_syarat')
            ->get();
        // return view('/frontend/perizinan', ['sektor' => $sektor, 'jenis' => $jenis, 'datapemohon' => $datapemohon]);
    }

    // public function dokumen()
    // {

    //     $id_sub_perizinan = $_POST['id_sub_perizinan'];
    //     $persyaratan1 = DB::table('persyaratan1')->select('syarat', 'id_sub_perizinan', 'id_syarat')->where('id_sub_perizinan', '=', $id_sub_perizinan)->get();
    //     $sub_persyaratan2 = array();
    //     $testing = DB::table('persyaratan1')->select('*')->leftjoin('sub_persyaratan', 'sub_persyaratan.id_syarat', '=', 'persyaratan1.id_syarat')->where('persyaratan1.id_sub_perizinan', '=', $id_sub_perizinan)->get();
    //     return  response()->json($testing);
    // }
    public function input(Request $request)
    {
        $date = date('H-i-s');
        $random = \Str::random(5);
        $request->file('id_datapemohon')->move('upload/dokumen_pdf', $date . $random . $request->file('id_datapemohon')->getClientOriginalName());

        DB::table('dokumen')
            ->insert([
                'id_syarat' => 1,
                'berkas' => $date . $random . $request->file('id_datapemohon')->getClientOriginalName(),
                'id_datapemohon' => 2
                // 'id_syarat' => $request->syarat,
                // 'berkas' => $date . $random . $request->file('id_datapemohon')->getClientOriginalName(),
                // 'id_datapemohon' => $request->id_datapemohon
            ]);
        return response()->json(['success' => 'Data is successfully added']);
    }
    public function inputform()
    {
        $permohonan = DB::table('dokumen')->get();
        // return view('frontend/perizinan', ['permohonan' => $permohonan]);
    }
}
