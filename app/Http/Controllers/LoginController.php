<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only("email", "password"))) {
            $user = Auth::user();
            if($user->level === 'admin') {
              return redirect("/aktivitasadmin");
            } else {
              return redirect("/aktivitasuser");
            }
          }        
          return redirect('login');
    }

    public function logout(){
      Auth::logout();
      return \redirect('/login');
  }

  public function regist (request $request){
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|min:4',
      'nohp' => 'required|min:12',
      'level' => 'required'
    ]);

    $data['name']  = $request->name;
    $data['email']  = $request->email;
    $data['password']  = Hash::make ($request->password);
    $data['nohp']  = $request->nohp;
    $data['level']  = $request->level;

    User::create($data);

    return redirect()->route('login');
  }
}
