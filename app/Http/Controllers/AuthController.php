<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthRequest $request): \Illuminate\Http\JsonResponse
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

    public function user(): UserResource
    {
        return new UserResource(Auth::user());
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return response()->json(['message' => 'Uitgelogd']);
    }
}
