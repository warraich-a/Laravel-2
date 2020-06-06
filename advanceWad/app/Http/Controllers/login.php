<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;


class login extends Controller
{

    public function login(Request $request)
    {
       /* return $request->input();*/
        $password = Register::where('password', $request->password_login)->first(); // checking pasword through query

        $email = Register::where('email', $request->email)->first(); // checking email through query


        $data  = Register::all();
        foreach ($data as $d)
        {
            if($d->password = $password && $d->email = $email) // here it will check if the data exist
            {
                if($password->id == $email->id )
                {
                    return view('welcome');
                    $request->session()->put('data', $request->input());
                }
                return view('login');
            }
            else{
                return view('login');
            }
        }

    }
}
