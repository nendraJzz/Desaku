<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aktivitasuser(){
        return view('user.aktivitasuser');
    }

    public function wargauser(){
        return view('user.wargauser');
    }

    public function pengumumanuser(){
        return view('user.pengumumanuser');
    }

    public function laporanpencurianuser(){
        return view('user.laporanpencurianuser');
    }
    public function laporankebakaranuser(){
        return view('user.laporankebakaranuser');
    }
    public function laporanbencanauser(){
        return view('user.laporanbencanauser');
    }
    public function laporankecelakaanuser(){
        return view('user.laporankecelakaanuser');
    }
}
