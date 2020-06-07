<?php

namespace App\Http\Controllers;

use App\Comm;
use Illuminate\Http\Request;

class CommController extends Controller
{
    public function show($id){

        $post =  Comm::where('pid',$id)->all();

        return $post;
    }
}
