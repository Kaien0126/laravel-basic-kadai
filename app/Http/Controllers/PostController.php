<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        // データ取得
        $posts = DB::table('posts')->get();
        
        // indexにデータを渡す
        return view('posts.index', compact('posts'));
    }
}
