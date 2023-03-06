<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
        return view('program');
    }
    public function karir(){
        return view('program.karir');
    }

    public function magang(){
        return 'Program Magang';
    }

    public function kunjungan(){
        return 'Program Kunjungan Industri';
    }
}
