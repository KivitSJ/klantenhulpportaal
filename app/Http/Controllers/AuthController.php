<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json(Auth::user());
        }

        return response()->json([
            'message' => 'Inloggegevens ongeldig',
        ], 401);
    }

    public function user()
    {
        return new UserResource(Auth::user());
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return response()->json(['message' => 'Uitgelogd']);
    }
}
