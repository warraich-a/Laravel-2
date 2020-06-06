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

}
