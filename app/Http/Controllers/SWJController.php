<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SWJController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
$absen = DB::table('absen')
        ->select('*')
        ->where('id_absen', '=', '7')
        ->join('kelas','kelas.id_kelas','=','siswa.id_kelas')
        ->get();
        dump($absen);
}