<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Aktivitas;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\PengumumanUser;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function aktivitasuser(){
        $ak = Aktivitas::all();
        return view('user.aktivitasuser', compact('ak'));
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
    public function settingprofileuser(){
        return view('user.settingprofileuser');
    }
}
