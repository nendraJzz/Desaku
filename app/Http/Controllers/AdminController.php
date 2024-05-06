<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function aktivitasadmin(){
        return view('admin.aktivitasadmin');
    }

    public function wargaadmin(){
        return view('admin.wargaadmin');
    }

    public function pengumumanadmin(){
        return view('admin.pengumumanadmin');
    }

    // Opsii
    public function laporanpencurianadmin(){
        return view('admin.laporanpencurianadmin');
    }
    public function laporankebakaranadmin(){
        return view('admin.laporankebakaranadmin');
    }
    public function laporanbencanaadmin(){
        return view('admin.laporanbencanaadmin');
    }
    public function laporankecelakaanadmin(){
        return view('admin.laporankecelakaanadmin');
    }

    //setting profile
    public function settingprofileadmin(){
        return view('admin.settingprofileadmin');
    }



    
}
