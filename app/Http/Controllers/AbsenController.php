<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function absenCount()
    {
        $absen = Absen::where('tanggal', Carbon::today())->get();
        $absencount = $absen->count();
        return view('dashboard', ['count' => $absencount]);
    }
}
