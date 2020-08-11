<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index() {
        return 'abcd';
    }

    public function formCreate() {
        return view('about.create');
    }

    public function create(Request $request) {
        $title = $request->input('title');
        $content = $request->input('content');
        // $post = new Post;
        // $post->title = $title;
        // $post->content = $content;
        // $post->slug = Str::slug($title, '-');
        // $post->save();
        $arr = [
            'title' => $title,
            'content' => $content,
            'slug' => Str::slug($title, '-')
        ];
        $post = Post::create($arr);

        return response()->json([$arr, $post]);
    }
}
