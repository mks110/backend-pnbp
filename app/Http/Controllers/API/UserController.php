<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            
        ]);

        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
       
        $token = $user->createToken('Pnbp')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
 
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'user_name' => $request->user_name,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Pnbp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'User tidak terdaftar'], 401);
        }
    }
    public function logout(){
        
        
        auth()->logout();
        return response()->json(['message'=> 'sukses logout']);
        
    }    
    public function my(){
        $user = Auth::guard('api')->user();
        return response()->json(['data'=>$user]);
        
    }  
}
