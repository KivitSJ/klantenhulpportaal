<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Note;

use Illuminate\Http\Request;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return NoteResource::collection(Note::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validated();
        Note::create($validated);

        return response()->json(['message' => 'Notitie succesvol opgeslagen'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note): \Illuminate\Http\JsonResponse
    {
        $note->update($request->validated());

        return response()->json(['message' => 'Notitie succesvol geupdated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): \Illuminate\Http\JsonResponse
    {
        $note->delete();
        return response()->json(['message' => 'Notitie succesvol verwijderd'], 200);
    }
}
