<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{


    public function index(){

        $posts = Post::latest()->get();

        
        return  response()->json([ "posts" => $posts,]);

    }

    public function seePost(Post $post){

        $user = Auth::user();
    
        $postWithComments = Post::with(['comment', 'comment.replies', 'comment.parentComment'])->find($post->id);
        

        return response()->json([
            'post' => $postWithComments
        ]);

    }

    public function createPost(Request $request){


        $this->tesCreatePost($request);
    
    // CODINGAN YANG BENAR

        // $user = Auth::user();

        // if ($user) {
        //     $post = Post::create([
        //         'user_id' => $user->id,
        //         'content' => $request->content,
        //         'likes_count' => 0,
        //         'comments_count' => 0,
        //         'image' => $request->image,
        //     ]);
        
        //     return [
        //         'post' => $post,
        //     ];
        // } else {
        //     // Handle ketika pengguna tidak diotentikasi
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }
    }

    public function deletePost(Post $post){


       $this->tesDeletePost($post);

        // INI CODINGAN YANG BENAR

        // if (auth()->check()) {
        //     $user = Auth::user();
            
        //     $post = Post::findOrFail($post);
        //     if($post->user_id === $user->id){
        //         $post->comment()->delete();
        //         $post->delete();
        //         return [
        //             'post' => $post,
        //             'message' => 'Berhasil menghapus post'
        //         ];
        //     } 
            
        //     else {
        //         return [
        //             'error_code' => 403,
        //             'error' => "Anda tidak memiliki hak akses"
        //         ];
        //     }
        // } else {
        //     return [
        //         'error_code' => 401,
        //         'error' => "Anda tidak belum login"
        //     ];
        // }


    }
    


    
    public function updatePost(Request $request,$idPost)
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




    //---------------------------------
    //      METHOD UNTUK NGETES
    // -------------------------------

    private function tesDeletePost($post){

        $post = Post::findOrFail($post);
        // Ini variabel untuk tes dipostman saja
        $iduser ="204d0887-33c4-41ba-9ccb-e1b94dc236bc";
        if($iduser === $post->user_id){

            $post->comment()->delete();
            $post->delete();
            return [
                'post' => $post,
                'message' => 'Berhasil menghapus post',
                'code' => 200
            ];
        } else {
            return response()->json([
                'code' => 403,
                'message' => "Anda tidak memiliki hak akses"
            ]);
        }
            
    }


    private function tesCreatePost($request){

        $post = Post::create([
            'user_id' => $request->user_id,
            'content' => $request->content,
            'likes_count' => 0,
            'comments_count' => 0,
            'image' => $request->image,
        ]);

        return response()->json([
            'post' => $post,
        ]); 
    }






   


}
