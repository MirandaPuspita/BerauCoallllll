<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class TambahDokumenController extends Controller
{
    public function tambahdokumen()
    {
        // $id_sektor = $_POST['id_sektor'];
        // $perizinan = DB::table('sub_sektor_perizinan')->where("id_sektor", $id)->get();

        // dd($perizinan);
        // return view('frontend.tambahdokumen' ,compact('perizinan'));
        return view('frontend.tambahdokumen');
    }


    // public function input(Request $request)
    // {
    //     DB::table('datapemohon')
    //         ->insert([
    //             'dokumen' => $request->dokumen
    //         ]);
    //     return view('frontend.tambahdokumen/dokumen');
    //     // return redirect('/tambahdokumen')->with('success', 'Data berhasil disimpan!');
    // }
    // public function inputform()
    // {
    //     $permohonan = DB::table('datapemohon')->get();
    //     return view('frontend/tambahdokumen/input');
    // }

    public function dokumen(Request $request)
    {
        # code...
    }
}
