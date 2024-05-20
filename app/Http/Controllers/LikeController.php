<?php

use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggleLike(Request $request, $id)
    {
        $user = Auth::user();
        $post = Post::findOrFail($id);

        // Check if the user has already liked the post
        $existingLike = Like::where('user_id', $user->id)->where('post_id', $post->id)->first();

        if ($existingLike) {
            // User has already liked the post, so remove the like
            $existingLike->delete();
        } else {
            // User hasn't liked the post, so add the like
            $like = new Like();
            $like->user_id = $user->id;
            $like->post_id = $post->id;
            $like->save();
        }

        return redirect()->back();
    }

    public function like(Request $request)
    {
        $postId = $request->input('post_id');
        $userId = auth()->user()->id;

        // Check if the user has already liked the post
        $existingLike = Like::likedByUser($userId, $postId)->first();

        if ($existingLike) {
            // User has already liked the post, so unlike it
            $existingLike->delete();
            return redirect()->back()->with('success', 'Post unliked successfully.');
        } else {
            // User hasn't liked the post, so create a new like
            Like::create([
                'user_id' => $userId,
                'post_id' => $postId,
            ]);
            return redirect()->back()->with('success', 'Post liked successfully.');
        }
    }

}
