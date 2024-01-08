<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    

    public function createComment(Request $request,Post $post){
        

        $cekPost = Post::find($request->post_id);

        $user = Auth::user();
        if($cekPost){         
               // JIKA PUYA PARENT_COMMENT_ID
            if ($request->has("parent_comment_id")) {
                $parent_comment_id = Comment::find($request->parent_comment_id);
            
                if ($parent_comment_id) {
                    $comment = Comment::create([
                        "user_id" => $user->user_id,
                        "post_id" => $request->post_id,
                        "comment" => $request->comment,
                        "parent_comment_id" => $parent_comment_id->id
                    ]);
            
                    return response()->json([
                        "comment" => $comment,
                        "code" => 200
                    ]);
                } else {
                    return response()->json([
                        "error" => "Parent comment not found",
                        "code" => 404
                    ], 404);
                }
    
            // JIKA TIDAK MEMILIKI PARENT_COMENT_ID
            } else {
                $comment = Comment::create([
                    "user_id" => $request->user_id,
                    "post_id" => $request->post_id,
                    "comment" => $request->comment,
                ]);
            
                return response()->json([
                    "comment" => $comment,
                    "code" => 200
                ]);
            }
        }else{

            return response()->json([
                'code' => 404,
                'message' => "Postingan Not Found"
            ]);
        }
      
    
     
       
    }



    public function deleteComment(Post $post, Comment $comment){
        // Temukan komentar berdasarkan ID

        $user = Auth::user();
        $comment = Comment::find($comment->id);

        // Periksa apakah komentar ditemukan
        if ($comment) {

            // Periksa hak akses pengguna
            if ($user->id === $comment->user_id) {
                // Hapus komentar
                $comment->delete();

                return response()->json([
                    'code' => 200,
                    'message' => 'Berhasil menghapus komentar.',
                    'comment' => $comment,
                ]);
            } else {
                return response()->json([
                    'code' => 403,
                    'message' => 'Anda tidak memiliki hak akses.',
                ]);
            }
        } else {
            return response()->json([
                'code' => 404,
                'message' => 'Komentar tidak ditemukan.',
            ]);
        }

    }



}
