<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    function login(Request $request)
    {
        
        if($request->method() == "GET")

    {
        return view("login");

    }



        $email = $request->input('email');
        $password = $request->input('password');
        $pengguna = Pengguna::where('email', $email)
            ->first();
       
                    if ($pengguna == null) {
            return redirect()
            ->back()
            ->withErrors([
                "msg" => "Email tidak ditemukan!"
            ]);	
        }  
        if (!Hash::check($password, $pengguna->password))
        {
            return redirect()
            ->withErrors([
                "msg" => "password salah!"
            ])->back();
        }

        if(!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("idPengguna", $pengguna->id);
        return redirect()->route("homepage");
    }

    
    function logout(Request $request)
    {
        session()->flush();
        return redirect()->route("logout")->with('success', 'Selamat! Anda berhasil logout');
    }

}

