<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{



    public function seeFollower(User $user)
    {
        // Menggunakan relasi untuk mendapatkan followers dan menyertakan data user
        $follows = $user->follower()->with('follower')->get();

        return view('follow', [
            'follows' => $follows,
            'judul' => 'Follower'
        ]);
    }

    public function seeFollowing(User $user)
    {
        // Menggunakan relasi untuk mendapatkan followers dan menyertakan data user
        $follows = $user->following()->with('following')->get();

        return view('follow', [
            'follows' => $follows,
            'judul' => 'Following'
        ]);
    }



    public function followPeople(User $people)
    {


        $user = Auth::user();

        $cekFollow = Follow::where('following_id', $people->id)->where('follower_id', $user->id)->first();

        if ($cekFollow) {
            $cekFollow->delete();
        } else {
            $newFollow = new Follow();
            $newFollow->following_id = $people->id;
            $newFollow->follower_id = $user->id;
            $newFollow->save();
        }



        return redirect()->back();
    }
}
