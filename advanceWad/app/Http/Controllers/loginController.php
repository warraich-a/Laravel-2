<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;

class loginController extends Controller
{
    public function login(Request $request){

        try {
            $password = User::where('password', $request->password_login)->first(); // checking if the password exist

            $email = User::where('email', $request->email)->first(); // checking email thro


            $data  = User::all();

            foreach ($data as $d)
            {
                if($d->password = $password && $d->email = $email) // here it will check if the data exist
                {
                    if($password->id == $email->id )
                    {
                        $request->session()->put('data', $request->input());
                        return view('home', ['email' => $email->email]);
                    }

                        echo '<script>
					alert("Password/Username is wrong")
					</script>';


                }
                else {
                    return redirect()->back();
                }
            }
        }catch(PDOEXCEPTION $e) {
            print_r("Something went wrong: " . $e->getMessage());
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
