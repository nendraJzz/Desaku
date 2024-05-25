<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $user = Auth::user();
    //     if ($request->hasFile('profile_photo')) {
    //         // Delete old profile photo if exists
    //         if ($user->profile_photo) {
    //             Storage::delete($user->profile_photo);
    //         }

    //         // Store new profile photo
    //         $path = $request->file('profile_photo')->store('profile_photos');

    //         // Update user profile photo path
    //         $user->profile_photo = $path;
    //         $user->save();
            
    //         return back()->with('success', 'Profile photo updated successfully.');
            
    //     } catch (Exception $e) {
    //         return back()->withErrors(['error' => 'There was an error uploading the profile photo. Please try again.']);
    //     }

    //     return back()->withErrors(['error' => 'No file selected.']);

    // }
}
