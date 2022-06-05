<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

class PermohonanController extends Controller
{
    public function permohonan()
    {
        $permohonan = DB::table('datapemohon')
            ->select('*')->get();
        // return view('frontend/permohonan', ['permohonan' => $permohonan]);

        $permohonan = DB::table('datapemohon')
            ->select('datapemohon.*', 'sektor_perizinan.nama_sektor', 'sub_sektor_perizinan.*', 'jenis_perizinan.*')
            // ->join('sektor_perizinan', 'sektor_perizinan.nama_sektor', 'sektor_perizinan.id_sektor', 'sub_sektor_perizinan.id_sub', 'jenis_perizinan.id_jenis', '=', 'datapemohon.id_sektor')
            ->join('sektor_perizinan', 'sektor_perizinan.id_sektor', '=', 'datapemohon.id_sektor')
            ->join('sub_sektor_perizinan', 'sub_sektor_perizinan.id_sub', '=', 'datapemohon.id_sub')
            ->join('jenis_perizinan', 'jenis_perizinan.id_jenis', '=', 'datapemohon.id_jenis')
            // ->where('sub_sektor_perizinan.id_sektor', '=', 3)
            ->get();

        $total_diajukan = DB::table('datapemohon')
            ->where('status', '=', 'diajukan')
            ->count();

        $total_revisi = DB::table('datapemohon')
            ->where('status', '=', 'revisi')
            ->count();

        return view('frontend/permohonan', ['permohonan' => $permohonan, 'diajukan' => $total_diajukan, 'revisi' => $total_revisi]);
    }

    // public function __invoke(Request $request)
    // {
    //     $statsTableMap = [
    //         'Olahan' => 'olahan',
    //         'Kuliner' => 'kuliner',
    //         'Kerajinan' => 'kerajinan',
    //         'Perdagangan' => 'perdagangan',
    //         'Jasa' => 'jasa',
    //         'Peternakan' => 'peternakan',
    //     ];

    //     $statData = [
    //         'labels' => [],
    //         'data' => [],
    //     ];
    //     foreach ($statsTableMap as $label => $table) {
    //         $statData['labels'][] = $label;
    //         $statData['data'][] = DB::table($table)->count();
    //     }

    //     $jumlahdatapemohon = array_reduce($statData['data'], function ($prev, $current) {
    //         return $prev + $current;
    //     }, 0);

    //     return view('backend.dashboard', ['statData' => $statData, 'jumlahdatapemohon' => $jumlahdatapemohon]);
    // }
}
