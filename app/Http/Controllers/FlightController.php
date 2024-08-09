<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function create()
    {
        return view('flights.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire

        $flight = Flight::create([
            'origin' => $request->input('origin'),
            'destination' => $request->input('destination'),
            'flight_number' => $request->input('flight_number'),
            'departure' => $request->input('departure'),
            'name' => $request->input('name'),
        ]);

        return redirect()->route('flights.index')->with('success', 'Vol créé avec succès!');
    }

    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }
    
    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

    public function update(Request $request, Flight $flight)
    {
        // Validation des données du formulaire

        $flight->update([
            'origin' => $request->input('origin'),
            'destination' => $request->input('destination'),
            'flight_number' => $request->input('flight_number'),
            'departure' => $request->input('departure'),
            'name' => $request->input('name'),
        ]);

        return redirect()->route('flights.index')->with('success', 'Vol mis à jour avec succès!');
    }
    
    public function destroy(Flight $flight)
    {
        // Supprimer tous les billets associés
        $flight->tickets()->delete();
    
        // Supprimer le vol
        $flight->delete();
    
        return redirect()->route('flights.index')->with('success', 'Vol et billets associés supprimés avec succès!');
    }
}
