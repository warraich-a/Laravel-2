<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function register($name, $email, $password, $country)
    {
        return view('welcome');
    }
}
