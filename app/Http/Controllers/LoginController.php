<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //This is for demo
    public function login(Request $request){
        $email = $request->email;

        $password = $request->password;

        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $response = $user->save();
        $final = [
            "status" => 200,
            "message" => "saved successfully!"
        ];

        return response()->json(['status' => 200, $final]);

    }
}
