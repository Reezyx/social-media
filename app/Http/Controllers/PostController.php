<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{


    public function formCreatePost()
    {

        return view('createPost');
    }

    public function index()
    {
        $user = Auth::user();
        $posts = Post::latest()->get();
        $others = User::all();

        return view('index', [
            "posts" => $posts,
            "user" => $user,
            "others" => $others
        ]);
    }
    public function seePost(Post $post)
    {

        $user = Auth::user();

        // $postWithComments = Post::with(['comment', 'comment.replies', 'comment.parentComment'])->find($post->id);
        $post = Post::with('user')->find($post->id);
        $comments = Comment::with('replies')->where('post_id', $post->id)
            ->whereNull('parent_comment_id')
            ->get();

        return view('detailPostingan', [
            "post" => $post,
            "comments" => $comments
        ]);
    }

    public function createPost(Request $request)
    {

        $user = Auth::user();

        if ($user) {
            $post = Post::create([
                'user_id' => $user->id,
                'content' => $request->content,
                'likes_count' => 0,
                'comments_count' => 0,
                'image' => $request->image,
            ]);

            return redirect()->intended('home')->with('message', 'Postingan berhasil dibuat');
        } else {

            return redirect('/login')->with('message', 'Anda belum Login');
        }
    }

    public function deletePost(Post $post)
    {

        $user = Auth::user();

        if (auth()->check()) {


            if ($post->user_id === $user->id) {
                $post->comment()->delete();
                $post->delete();
                return redirect()->route('home')->with('message', 'berhasil menghapus postingan');
            } else {
                return redirect()->route('home')->with('message', "Anda Tidak punya hak akses");
            }
        } else {
            return redirect('/login');
        }
    }



    public function updatePost(Request $request, $idPost)
    {
        $post = Post::find($idPost);


        if (!$post) {
            return response()->json(['error' => 'Postingan Tidak ditemukan'], 404);
        }

        $user = Auth::user();

        if ($user->id !== $post->user_id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $validator = Validator::make($request->all(), [
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $post->update([
            'content' => $request->content,
            'image' => $request->image,
        ]);

        return [
            'message' => 'Postingan berhasil diupdate',
            'post' => $post,
        ];
    }




    public function likePost(Request $request, Post $post)
    {
        $user = Auth::user();

        // CEK SUDAH DILIKE APA BELUM
        $like = Like::where('user_id', $user->id)->where('item_type', 'App\Models\Post')->where('item_id', $post->id)->first();
        if ($like != null) {
            $post->likes_count -= 1;

            $post->save();
            $like->delete();

            return redirect()->back();
        }

        $post->likes_count += 1;
        $post->save();

        $like = new Like();
        $like->user_id = $user->id;
        $like->item_type = 'App\Models\Post';
        $like->item_id = $post->id;
        $post->like()->save($like);



        return redirect()->back();
    }


    public function addBookmark(Post $post)
    {
        $user = Auth::user();

        $cekBookmark = $user->bookmark()->where('post_id', $post->id)->exists();

        if ($cekBookmark) {

            $user->bookmark()->detach($post->id);
            $message = 'Post removed from bookmark.';
        } else {

            $user->bookmark()->attach($post->id);
            $message = 'Post added to bookmarks.';
        }


        return redirect()->back();
    }


    public function seeBookmark()
    {
        $user = Auth::user();

        $posts = $user->bookmark()->latest()->get();

        return view('bookmarks', [
            "posts" => $posts,
        ]);
    }
}