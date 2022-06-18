<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use App\Models\Post;

class PostsController
{
    public function show($slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first();

        if (! $post) {
            abort(404);
        }

        return view('post', [
            'post' => $post
        ]);
    }
}
