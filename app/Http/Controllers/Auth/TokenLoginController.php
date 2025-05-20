<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class TokenLoginController extends Controller
{
    public function login(Request $request)
    {
        $token = $request->input('token');
        $id = $request->input('id');
        // Validate token
        if (!$token) {
            return response()->json(['error' => 'Token is required'], 400);
        }
        $response = Http::withToken($token)->post('http://192.168.128.193:8080/api/user/' . $id);

        if ($response['message'] == 'success') {
            $userData = $response['data'];
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                ['name' => $userData['name']]
            );

            Auth::login($user);
            return response()->json(['status' => 'logged_in']);
        }

        return response()->json(['error' => 'Invalid token'], 401);
        // return response()->json(['status' => 'logged_in']);
    }
}
