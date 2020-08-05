<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function regis()
    {
        return view('register');
    }
    function welcome(Request $request)
    {
        $first = $request->input('nama1');
        $last = $request->input('nama2');
        $data = [
            'nama1' => $first,
            'nama2' => $last,
        ];
        return view('welcome', $data);
    }
}
