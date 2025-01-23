<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // データ取得
        $posts = DB::table('posts')->get();
        
        // indexにデータを渡す
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        // バリデーション
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200'
        ]);

        // テーブルにデータ追加
        $post = new post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        // リダイレクト
        return redirect('/posts');
    }

}
