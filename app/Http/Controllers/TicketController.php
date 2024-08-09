<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create()
    {
        $flights = Flight::all();
        return view('tickets.create', compact('flights'));
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire

        $ticket = Ticket::create([
            'flight_id' => $request->input('flight_id'),
            'ticket_number' => $request->input('ticket_number'),
            'passenger_name' => $request->input('passenger_name'),
            'boarding_gate' => $request->input('boarding_gate'),
            'class' => $request->input('class'),
            'seat' => $request->input('seat'),
            'boarding_time' => $request->input('boarding_time'),
        ]);

        return redirect()->route('tickets.index')->with('success', 'Billet créé avec succès!');
    }

    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }
    public function edit(Ticket $ticket)
    {
        $flights = Flight::all();
        return view('tickets.edit', compact('ticket', 'flights'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        // Validation des données du formulaire

        $ticket->update([
            'flight_id' => $request->input('flight_id'),
            'ticket_number' => $request->input('ticket_number'),
            'passenger_name' => $request->input('passenger_name'),
            'boarding_gate' => $request->input('boarding_gate'),
            'class' => $request->input('class'),
            'seat' => $request->input('seat'),
            'boarding_time' => $request->input('boarding_time'),
        ]);

        return redirect()->route('tickets.index')->with('success', 'Billet mis à jour avec succès!');
    }
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Billet supprimé avec succès!');
    }
}
