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
      
        return view('followDetail', [
            'follows' => $follows,
            'judul' => 'Follower',
            'user' => $user
        ]);
    }

    public function seeFollowing(User $user)
    {
        // Menggunakan relasi untuk mendapatkan followers dan menyertakan data user
        $follows = $user->following()->with('following')->get();

        return view('followDetail', [
            'follows' => $follows,
            'judul' => 'Following',
            'user' => $user
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
