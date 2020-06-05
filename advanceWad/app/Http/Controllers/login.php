<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;


class login extends Controller
{

    public function login(Request $request)
    {
       /* return $request->input();*/

        $request->session()->put('data', $request->input());

        return view('welcome');
    }
}
