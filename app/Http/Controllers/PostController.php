<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
<<<<<<< HEAD
        // データ取得
        $posts = DB::table('posts')->get();
        
        // indexにデータを渡す
        return view('posts.index', compact('posts'));
=======
        return view('posts.index');
>>>>>>> ce0d9ebcaf9709fc6b416aabe5d176b2c2531c54
    }
}
