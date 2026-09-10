<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReactionRequest;
use App\Http\Requests\UpdateReactionRequest;
use App\Http\Resources\ReactionResource;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Reaction;

use Illuminate\Http\Request;


class ReactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return ReactionResource::collection(Reaction::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReactionRequest $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validated();
        Reaction::create($validated);

        return response()->json(['message' => 'Reactie succesvol opgeslagen'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReactionRequest $request, Reaction $reaction): \Illuminate\Http\JsonResponse
    {
        $reaction->update($request->validated());

        return response()->json(['message' => 'Reactie succesvol geupdated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reaction $reaction): \Illuminate\Http\JsonResponse
    {
        $reaction->delete();
        return response()->json(['message' => 'Reactie succesvol verwijderd'], 200);
    }
}
