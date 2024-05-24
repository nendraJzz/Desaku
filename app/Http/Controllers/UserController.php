<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function aktivitasuser(){
        $ak = Aktivitas::all();
        return view('user.aktivitasuser',compact('ak'));
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

    public function pengumuman(Request $request) {
        $request->validate([
            'title' => ['required'],
            'text' => ['required']
        ]);

        Pengumuman::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'text' => $request->text
        ]);

        return redirect()->route('pengumumanuser');
    }
}
