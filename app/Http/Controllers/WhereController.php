<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        $absen = DB::table('absen')
        ->select('*')
        ->where('id_absen', '=', '7')
        ->get();
        return view('Where_0304' , ['absen' => $absen]);
}