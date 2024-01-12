<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{


    public function sendReply(Request $request, Post $post)
    {


        $cekPost = Post::find($request->post_id);

        $user = Auth::user();
        if ($cekPost) {
            // JIKA PUYA PARENT_COMMENT_ID
            $parent_comment_id = Comment::find($request->parent_comment_id);

            if ($parent_comment_id) {
                $comment = Comment::create([
                    "user_id" => $user->id,
                    "post_id" => $request->post_id,
                    "comment" => $request->comment,
                    "parent_comment_id" => $request->parent_comment_id
                ]);

                return redirect()->route('seePost', ['post' => $request->post_id])->with([
                    'message' => 'Berhasil membalas komentar',
                ]);
            } else {
                return redirect()->route('seePost', ['post' => $request->post_id])->with([
                    'message' => 'Komentar tak tersedia',
                ]);
            }
        } else {

            return redirect()->route('home')->with([
                'message' => 'Postingan tidak tersedia',
            ]);
        }
    }

    public function sendComment(Request $request, Post $post)
    {
        $user = Auth::user();
        $cekPost = Post::find($request->post_id);
        if ($cekPost) {
            // JIKA PUYA PARENT_COMMENT_ID

            $comment = Comment::create([
                "user_id" => $user->id,
                "post_id" => $request->post_id,
                "comment" => $request->comment,
            ]);
            return redirect()->route('seePost', ['post' => $request->post_id])->with([
                'message' => 'Berhasil membalas komentar',
            ]);
        } else {

            return redirect()->route('home')->with([
                'message' => 'Postingan tidak tersedia',
            ]);
        }
    }


    public function deleteComment(Post $post, Comment $comment)
    {
        // Temukan komentar berdasarkan ID

        $user = Auth::user();
        $comment = Comment::with('replies')->find($comment->id);
        if ($comment) {

            if ($user->id === $comment->user_id) {

                if ($comment->replies->isNotEmpty()) {
                    foreach ($comment->replies as $reply) {
                        $reply->delete();
                    }
                }

                $comment->delete();
                return redirect()->route('seePost', ['post' => $post->id])->with([
                    'message' => 'berhasil menghapus komen',
                ]);
            } else {
                return redirect()->route('home')->with([
                    'message' => 'Anda tidak memilki hak akses',
                ]);
            }
        } else {
            return redirect()->route('home')->with([
                'message' => 'Komentar sudah tidak tersedia',
            ]);
        }
    }

    public function deleteReply(Post $post, Comment $comment)
    {

        $user = Auth::user();
        $comment = Comment::find($comment->id);

        if ($user->id === $comment->user_id) {


            $comment->delete();
            return redirect()->route('seePost', ['post' => $post->id])->with([
                'message' => 'berhasil menghapus reply',
            ]);
        } else {
            return redirect()->route('home')->with([
                'message' => 'Anda tidak memilki hak akses',
            ]);
        }
    }




    public function likeComment(Post $post, Comment $comment)
    {
        $user = Auth::user();

        $like = Like::where('user_id', $user->id)
            ->where('item_type', 'App\Models\Comment')
            ->where('item_id', $comment->id)
            ->first();

        if ($like != null) {
            $comment->likes_count -= 1;
            $comment->save();

            $like->delete();
        } else {
            $comment->likes_count += 1;
            $comment->save();

            $log = new Like();
            $log->user_id = $user->id;
            $log->item_type = 'App\Models\Comment';
            $log->item_id = $comment->id;
            $comment->like()->save($log);
        }

        $comment->refresh();

        return redirect()->back();
    }
}
