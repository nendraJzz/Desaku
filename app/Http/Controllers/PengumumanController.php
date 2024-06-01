<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\PengumumanUser;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    public function pengumumanuser(Request $request) {
        $request->validate([
            'text' => ['required']
        ]);

        Pengumuman::create([
            'user_id' => Auth::id(),
            'text' => $request->text
        ]);

        return redirect()->route('pengumumanuser');
    }
}
