<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\User;

use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $user = $request->user();

        if (!$user->isAdmin()) {
            $users = User::admins()->orWhere('id', $user->id)->get();
            
        }

        $users = User::all();
        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validated();
        User::create($validated);

        return response()->json(['message' => 'Gebruiker succesvol opgeslagen']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): \Illuminate\Http\JsonResponse
    {
        $user->update($request->validated());

        return response()->json(['message' => 'Gebruiker succesvol geupdated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): \Illuminate\Http\JsonResponse
    {
        $user->delete();
        return response()->json(['message' => 'Gebruiker succesvol verwijderd']);
    }
}
