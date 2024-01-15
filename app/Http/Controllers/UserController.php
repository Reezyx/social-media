<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Follow;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function formLogin()
    {

        return view('login');
    }

    public function formRegistrasi()
    {

        return view('registrasi');
    }


    public function registrasi(Request $request)
    {

        $validatedData = $request->validate([
            'email' => ['required', 'email:dns', 'unique:users,email'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required', 'min:8'],
            'name' => ['required', 'max:255'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        try {

            $user = User::create($validatedData);

            // Redirect with success message and user data
            return redirect()->route('formLogin')->with([
                'success' => 'Registrasi berhasil! Please login',
                'user' => $user
            ]);
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }




    public function userLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);


        $credentials = $validator->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Mendapatkan pengguna yang terotentikasi
            $user = Auth::user();

            // Mengarahkan ke halaman yang sesuai berdasarkan peran (role)
            return redirect()->intended('/index')->with('succces', 'anda berhasil login');
        }

        return back()->withErrors(['password' => 'Password yang dimasukkan salah.'])->with('failed', 'Login Failed');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function seePeople(User $user)
    {

        $userWithPosts = User::with(['post', 'follower', 'following'])->find($user->id);

        // codingan dibawah bisa namun tidak menggunakan eagerLoading

        // $followerCount = Follow::where('following_id', $user->id)->count();
        // $followingCount = Follow::where('follower_id', $user->id)->count();

        return view('othersProfile', [
            'user' => $userWithPosts,
            'follower_count' => $userWithPosts->follower->count(),
            'following_count' => $userWithPosts->following->count()
        ]);
    }
    public function myProfile()
    {

        $user = Auth::user();
        $userWithPosts = User::with(['post', 'follower', 'following'])->find($user->id);

        // codingan dibawah bisa namun tidak menggunakan eagerLoading

        // $followerCount = Follow::where('following_id', $user->id)->count();
        // $followingCount = Follow::where('follower_id', $user->id)->count();

        return view('myProfile', [
            'user' => $userWithPosts,
            'follower_count' => $userWithPosts->follower->count(),
            'following_count' => $userWithPosts->following->count()
        ]);
    }
    public function editProfile(){
        $user = Auth::user();
        return view('editProfile', [
            'user' => $user
        ]);
    }
}
