<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class RegisterController extends Controller
{
    public function register($name, $email, $password, $country)
    {
        return view('welcome');
    }

    public function insert(Request $request)
    {
        $data = new Register();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password_1;
        $data->country = $request->country;
        $data->save();
        return view('welcome');
    }

    public function login(Request $request)
    {
        $password = Register::where('email', $request->email and 'password', $request->password_login)->first();

        $email = Register::where('email', $request->email)->firstOr(function (){

        });

        /*$data  = Register::all();
        foreach ($data as $d)
        {
            if($d->password = $password && $d->email = $email)
            {
                return view('welcome');
            }
            else{
                return view('login');
            }
        }*/
        if($password != null ){
            return view('welcome');
        }
        else {
            return view('login');
        }
       /* return view('welcome');*/
    }
}
