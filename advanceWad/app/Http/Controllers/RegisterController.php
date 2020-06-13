<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register($name, $email, $password, $country)
    {
        return view('welcome');
    }

    public function insert(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password_1; // this is important. otherwise login wont be possible because that checks the encryption
        $data->country = $request->country;
        $data->save();
        return view('welcome');
    }

}
