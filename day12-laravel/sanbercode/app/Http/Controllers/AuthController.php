<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        // dd($request["alamat"]);
        return "hallo";
    }

    // menangkap data dengan request
    public function welcome_post(Request $request)
    {
        // dd($request->all());
        $nama = $request["nama"];
        $last_name = $request["last_name"];
        return view('selamat_datang', compact('nama', 'last_name'));
    }
}
