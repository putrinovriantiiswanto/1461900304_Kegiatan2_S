<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    $siswa = DB::table('siswa')
        
    ->join('kelas','kelas.id_kelas','=','siswa.id_kelas')
    ->select('*')
    ->get();
    //dump($siswa);
    return view('join_304' , ['absen' => $absen]);
}