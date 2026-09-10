<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Http\Resources\TicketResource;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Ticket;

use Illuminate\Http\Request;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return TicketResource::collection(Ticket::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validated();
        Ticket::create($validated);

        return response()->json(['message' => 'Ticket succesvol opgeslagen']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket): \Illuminate\Http\JsonResponse
    {
        $ticket->update($request->validated());

        return response()->json(['message' => 'Ticket succesvol geupdated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket): \Illuminate\Http\JsonResponse
    {
        $ticket->delete();
        return response()->json(['message' => 'Ticket succesvol verwijderd']);
    }
}
