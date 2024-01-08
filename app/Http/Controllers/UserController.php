<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function formLogin(){

        return view('login');
    }

    public function formRegistrasi(){

        return view('registasi');
    }


    public function registrasi(Request $request){

        $validatedData = $request->validate([
            'email' => ['required','email:dns','unique:users,email'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required','min:8'],
            'name' => ['required', 'max:255'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);        
        try {
            $user = User::create($validatedData);

            return [
                'status' => 'berhasil',
                'data' => $user
            ];
        } catch (\Exception $e) {

            return [
                'status' => 'Gagal ',
                'Error' => $e->getMessage()
            ];
        }
    }




    public function login(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
 
        if($validator->fails()){
         return response()->json(["error"=>$validator->errors()]);
        }
        $credentials = $validator->validated();
 
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
           
            $token = $user->createToken('token-name');

            

            
            return response()->json([

                'message' => 'Login successful',
                'data' => [
                    "user" => $user,
                    "token" => $token
                ]
            ]);
        }else{

            return [
                'status' => 'gagal login',

            ];
        }
    }








    

    // public function store(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'email' => ['required', 'email:dns', 'unique:users,email'],
    //         'username' => ['required', 'unique:users,username'],
    //         'name' => ['required', 'max:255'],
    //         'password' => ['required', 'min:8']
    //     ]);
    

    //     if ($validator->fails()) {
    //         return response()->json(['message' => 'Gagal menyimpan data', 'error' => $validator->errors()], 422);
    //     }

    //     $validatedData = $request->all();
    //     $validatedData['password'] = Hash::make($validatedData['password']);
    
    //     try {
    //         $user = User::create($validatedData);
    
    //         return response()->json(['message' => 'Data berhasil disimpan', 'user' => $user], 201);
    //     } catch (\Exception $e) {
          
    //         return response()->json(['message' => 'Gagal menyimpan data', 'error' => $e->getMessage()], 500);
    //     }
    // }

    

    
}
