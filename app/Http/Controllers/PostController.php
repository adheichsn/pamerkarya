<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(9)->withQueryString()
        ]);
    }

            public function show(Post $post)
            {
                // // $post->increment('views');
                // // Get the user's IP address
                // $userIp = Request::ip();

                // // Generate a unique key for the post and the user's IP
                // $viewedKey = 'viewed_post_' . $post->id . '_' . $userIp;

                // // Check if the post has already been viewed from this IP in the current session
                // if (!Session::has($viewedKey)) {
                //     // Increment the views count since it's a new view from this IP
                //     $post->increment('views');

                //     // Set the flag in the session to prevent multiple views from this IP
                //     Session::put($viewedKey, true);
                // }

                // dd($post);
                // dd($post->likes);
                // $post->load('likes');

                // dd($post->likes);
                

                // // Get the current user
                // $user = Auth::user();

                // if ($user) {
                //     // Check if the user has already liked the post
                //     $isLiked = $post->likes->contains('user_id', $user->id);
                // } else {
                //     // If the user is not authenticated, set $isLiked to false
                //     $isLiked = false;
                // }

                // Check if the user has already liked the post
                // $isLiked = $user ? $post->likes->contains('user_id', $user->id) : false;

                // Increment the view count for the post
                $post->increment('views');
                return view('post', [
                    "title" => "single post",
                    "active" => "posts",
                    "post" => $post,
                    // "isLiked" => $isLiked,
                ]);
                
            }
    
}
