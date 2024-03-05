<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $valid = $request->validate([
            'name' => "required|max:25",
            'email' => 'required|unique:users,email|email',
            'password' => ['required', Password::defaults()]
        ]);

        /** @var User $usr */
        $usr = User::create([
            'email' => $valid['email'],
            'password' => $valid['password'],
            'name' => $valid['name']
        ]);

        return response()->json(['user' => $usr, 'token' => $usr->createToken('login-token')->plainTextToken]);
    }

    public function login(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|exists:users,email|email',
            'password' => ['required', Password::defaults()]
        ]);

        if (!Auth::attempt($valid)) {
            return response()->json(['message' => 'Your credentials is incorrect!'], 400);
        }

        /** @var User $user */
        $user = Auth::user();
        return response()->json(['user' => $user, 'token' => $user->createToken('login-token')->plainTextToken]);
    }

    public function logout(Request $request)
    {
        auth()->user()->currentAccessToken()->delete();
        return response()->noContent();
    }
}
