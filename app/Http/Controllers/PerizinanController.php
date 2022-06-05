<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class PerizinanController extends Controller
{
    public function index()
    {
        $datapemohon = DB::table('datapemohon')
            ->select('datapemohon.*', 'sektor_perizinan.id_sektor', 'sub_sektor_perizinan.id_sub', 'jenis_perizinan.id_jenis')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'datapemohon.id_sektor')
            ->join('sub_sektor_perizinan', 'sub_sektor_perizinan.id_sub', '=', 'datapemohon.id_sub')
            ->join('jenis_perizinan', 'jenis_perizinan.id_jenis', '=', 'datapemohon.id_jenis')
            ->get();
        $sektor = DB::table('sektor_perizinan')
            ->select('*')
            ->get();

        // $perizinan = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 1)
        //     ->get();

        // $perizinan2 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 2)
        //     ->get();

        // $perizinan3 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 3)
        //     ->get();

        // $perizinan4 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 4)
        //     ->get();

        // $perizinan5 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 5)
        //     ->get();

        // $perizinan6 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 6)
        //     ->get();

        // $perizinan7 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 7)
        //     ->get();

        // $perizinan8 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 8)
        //     ->get();

        // $perizinan9 = DB::table('sub_sektor_perizinan')
        //     ->select('sub_sektor_perizinan.*', 'sektor_perizinan.nama_sektor')
        //     ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'sub_sektor_perizinan.id_sektor')
        //     ->where('sub_sektor_perizinan.id_sektor', '=', 9)
        //     ->get();

        // $persyaratan = DB::table('persyaratan')
        //     ->select('nama_perizinan.*', 'syarat')
        //     ->where('nama_perizinan', '=',)
        //     ->get();

        $jenis = DB::table('jenis_perizinan')
            ->select('*')
            ->get();

        // dd($sektor, $perizinan);
        // return view('/frontend/perizinan', ['sektor' => $sektor, 'perizinan' => $perizinan, 'perizinan2' => $perizinan2, 'perizinan3' => $perizinan3, 'perizinan4' => $perizinan4, 'perizinan5' => $perizinan5, 'perizinan6' => $perizinan6, 'perizinan7' => $perizinan7, 'perizinan8' => $perizinan8, 'perizinan9' => $perizinan9, 'jenis' => $jenis]);
        return view('/frontend/perizinan', ['sektor' => $sektor, 'jenis' => $jenis, 'datapemohon' => $datapemohon]);
    }

    public function sektor()
    {
        $sektor = DB::table('sektor_perizinan')->pluck('nama_sektor', 'id_sektor');
        return view('/frontend/perizinan', compact('sektor'));
    }

    public function perizinan()
    {
        $id_sektor = $_POST['id_sektor'];
        $perizinan = DB::table('sub_sektor_perizinan')->where("id_sektor", $id_sektor)->pluck('nama_perizinan', 'id_sub');
        return  response()->json($perizinan);
        $msg = "This is a simple message.";
    }

    // public function jenis()
    // {
    //     $jenis = DB::table('jenis_perizinan')
    //         ->select('*')
    //         ->get();
    //     return view('/frontend/perizinan', ['jenis' => $jenis]);
    // }

    // public function persyaratan()
    // {
    // $id_sub_perizinan = $_POST['id_sub_perizinan'];
    // $persyaratan1 = DB::table('persyaratan1')->select('syarat', 'id_sub_perizinan', 'id_syarat')->where('id_sub_perizinan', '=', $id_sub_perizinan)->get();
    // $sub_persyaratan2 = array();

    // foreach ($persyaratan1 as $syarat) {
    //     $sub_persyaratan = DB::table('sub_persyaratan')->select('sub_syarat', 'id_syarat')->where('id_syarat', '=', $syarat->id_syarat)->get();
    //     array_push($sub_persyaratan2, $sub_persyaratan);
    //     $syarat1 = $syarat;
    // }

    // return  response()->json($sub_persyaratan2);
    // }
    // }

    public function persyaratan()
    {

        $id_sub_perizinan = $_POST['id_sub_perizinan'];
        $persyaratan1 = DB::table('persyaratan1')->select('syarat', 'id_sub_perizinan', 'id_syarat')->where('id_sub_perizinan', '=', $id_sub_perizinan)->get();
        $sub_persyaratan2 = array();

        // foreach ($persyaratan1 as $syarat) {
        //     $sub_persyaratan = DB::table('sub_persyaratan')
        //         // ->select('persyaratan1.', 'sektor_perizinan.nama_sektor')
        //         ->leftjoin('persyaratan1', 'sub_persyaratan.id_syarat', '=', 'persyaratan1.id_syarat')
        //         ->select('persyaratan1.syarat', 'sub_persyaratan.sub_syarat')
        //         ->where('sub_persyaratan.id_syarat', '=', $syarat->id_syarat)
        //         ->get();
        //     if ($sub_persyaratan == []) {
        //         array_push($sub_persyaratan2, $syarat);
        //     } else {
        //         array_push($sub_persyaratan2, $sub_persyaratan);
        //     }
        //     // array_push($sub_persyaratan2, $sub_persyaratan);
        // }

        $testing = DB::table('persyaratan1')->select('*')->leftjoin('sub_persyaratan', 'sub_persyaratan.id_syarat', '=', 'persyaratan1.id_syarat')->where('persyaratan1.id_sub_perizinan', '=', $id_sub_perizinan)->get();
        return  response()->json($testing);
    }
    // public function persyaratan()
    // {

    //     $id_sub_perizinan = $_POST['id_sub_perizinan'];
    //     $persyaratan1 = DB::table('persyaratan1')->select('syarat', 'id_sub_perizinan', 'id_syarat')->where('id_sub_perizinan', '=', $id_sub_perizinan)->get();
    //     $sub_persyaratan2 = array();

    //     foreach ($persyaratan1 as $syarat) {
    //         $sub_persyaratan = DB::table('sub_persyaratan')
    //             ->select('persyaratan1.', 'sektor_perizinan.nama_sektor')
    //             ->join('persyaratan1', 'sub_persyaratan.id_syarat', '=', 'persyaratan1.id_syarat')
    //             ->select('persyaratan1.syarat', 'sub_persyaratan.sub_syarat')
    //             ->where('sub_persyaratan.id_syarat', '=', $syarat->id_syarat)
    //             ->get();
    //         if ($sub_persyaratan == []) {
    //             array_push($syarat);
    //         } else {
    //             array_push($sub_persyaratan2, $sub_persyaratan);
    //         }
    //         array_push($sub_persyaratan2, $sub_persyaratan);
    //     }

    //     return  response()->json($sub_persyaratan2);
    // }
    public function input(Request $request)
    {
        // print_r($request);
        // DB::table('sektor_perizinan')
        //     ->insert([
        //         'id_sektor' => $request->id_sektor,
        //         'nama_sektor' => $request->nama_sektor,
        //     ]);
        // $id_sektor = DB::table('sektor_perizinan')
        //     ->where([
        //         'id_sektor' => $request->id_sektor,
        //         'nama_sektor' => $request->nama_sektor
        //     ])->first();
        // $id_sub = DB::table('sub_sektor_perizinan')
        //     ->where([
        //         'id_sub' => $request->id_sub,
        //         'id_sektor' => $request->id_sektor,
        //         'nama_perizinan' => $request->nama_perizinan
        //     ])->first();
        // $id_jenis = DB::table('jenis_perizinan')
        //     ->where([
        //         'id_jenis' => $request->id_jenis,
        //         'jenis_perizinan' => $request->jenis_perizinan
        //     ])->first();
        DB::table('datapemohon')
            ->insert([
                'id_sektor' => $request->sektor,
                'id_sub' => $request->perizinan,
                'id_jenis' => $request->id_jenis,
                'nama_pemohon' => $request->nama_pemohon,
                // 'no_registrasi' => $request->no_registrasi,
                'tanggal_pengajuan' => date('Y-m-d H:i:s'),
                'tanggal_dibutuhkan' => $request->tanggal_dibutuhkan,
                // 'no_registrasi' => 123123,
                'status' => 'diajukan',
                'no_telepon' => $request->no_telepon,
                'email' => $request->email,
                'dokumen' => $request->dokumen
                // 'dokumen' => $request->dokumen,
                // 'aksi' => $request->aksi,
            ]);
        // return redirect('/tambahdokumen')->with('success', 'Data berhasil disimpan!');
        return response()->json(['success' => 'Data is successfully added']);
    }
    public function inputform()
    {
        $permohonan = DB::table('datapemohon')->get();
        return view('frontend/perizinan', ['permohonan' => $permohonan]);
    }
}
