<!-- resources/views/tickets/create.blade.php -->

@extends('layouts.app')

@section('title', 'Créer un billet')

@section('content')
    <div class="container">
        <h1 class="mt-4">Créer un billet</h1>

        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="flight_id">Vol:</label>
                <select class="form-control" name="flight_id" required>
                    @foreach ($flights as $flight)
                        <option value="{{ $flight->id }}">{{ $flight->flight_number }} - {{ $flight->origin }} à {{ $flight->destination }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ticket_number">Numéro de billet:</label>
                <input type="text" class="form-control" name="ticket_number" required>
            </div>

            <div class="form-group">
                <label for="passenger_name">Nom du passager:</label>
                <input type="text" class="form-control" name="passenger_name" required>
            </div>

            <div class="form-group">
                <label for="boarding_gate">Porte d'embarquement:</label>
                <input type="text" class="form-control" name="boarding_gate" required>
            </div>

            <div class="form-group">
                <label for="class">Classe:</label>
                <input type="text" class="form-control" name="class" required>
            </div>

            <div class="form-group">
                <label for="seat">Siège:</label>
                <input type="text" class="form-control" name="seat" required>
            </div>

            <div class="form-group">
                <label for="boarding_time">Heure d'embarquement:</label>
                <input type="datetime-local" class="form-control" name="boarding_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Créer le billet</button>
        </form>
    </div>
@endsection
