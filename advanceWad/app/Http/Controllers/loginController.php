<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login(Request $request){


        $password = User::where('password', $request->password_login)->first(); // checking if the password exist

        $email = User::where('email', $request->email)->first(); // checking email thro


        $data  = User::all();
        foreach ($data as $d)
        {
            if($d->password = $$request->password_login && $d->email = $request->email) // here it will check if the data exist
            {
                if($password->id == $email->id )
                {
                    return view('welcome');
                    $request->session()->put('data', $request->input());
                }

            }
            else{
                return redirect()->back();
            }
        }
      /* if(Auth::attempt([
            'email' => $request-> email,
            'password' => $request-> password_login

        ])){
            $user = User::where('email', $request->email)->first();

            if($user -> is_admin()){
                return redirect()->route('dashboard');
            }
           if($user ->password == $request-> password_login){

               return redirect()->route('dashboard');
       }

            return redirect()->route('home');
        }

        return redirect()->back();*/
    }
}
