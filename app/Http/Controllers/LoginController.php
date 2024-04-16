<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //this is for testing third time ----
    public function login(Request $request){
        $username = $request->username;

        $password = $request->password;

        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $response = $user->save();
        $final = [
            "status" => 200,
            "message" => "saved successfully!"
        ];

        return response()->json(['status' => 200, $final]);

    }
}
