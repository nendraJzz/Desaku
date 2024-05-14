<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function uploadImage(Request $request)
    // {
    //     if ($request->hasFile('profile_image')) {
    //         $image = $request->file('profile_image');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('uploads'), $imageName);
    //         // Lakukan sesuatu dengan nama file gambar, misalnya simpan ke database
    //     }

    //     return back()->with('success', 'Gambar berhasil diunggah.');
    // }
}
