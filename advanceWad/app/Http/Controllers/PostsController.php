<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Comm;
use App\Http\Controllers\CommController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    function test(){
        $post = Posts::all();
        return view('home2',['data'=>$post]);
    }
    public function show($id){

        $post =  Posts::where('id',$id)->firstOrFail();
        $test = Comm::where('pid',$id)->get();
        return view('postPage', ['data' => $post, 'comm'=>$test]);
    }
}
