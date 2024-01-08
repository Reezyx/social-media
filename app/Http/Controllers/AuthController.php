<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
  

    // public function authenticate(Request $request){

    //     $validator = Validator::make($request->all(),
    //     [
    //         'email' => 'required|email',
    //         'password' => 'required|min:8'
    //     ]);
 
    //     if($validator->fails()){
    //      return response()->json(["error"=>$validator->errors()]);
    //     }
 
    //     if (Auth::attempt($validator)) {
    //         $user = Auth::user(); 

    //         $token = Auth::user()->createToken('token-name')->plainTextToken;
    //         return response()->json([
    //             'token' => $token, 
    //             'message' => 'Login successful',
    //             'data' => $user]);
    //     } else {
    //         return response()->json([
    //             'message'=> 'email atau username salah']);
    //     }
   
    // }

}
