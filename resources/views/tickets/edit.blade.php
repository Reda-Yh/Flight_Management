<!-- resources/views/tickets/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Modifier un billet')

@section('content')
    <div class="container">
        <h1 class="mt-4">Modifier un billet</h1>

        <form action="{{ route('tickets.update', $ticket) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="flight_id">Vol:</label>
                <select class="form-control" name="flight_id" required>
                    @foreach ($flights as $flight)
                        <option value="{{ $flight->id }}" {{ $flight->id === $ticket->flight_id ? 'selected' : '' }}>
                            {{ $flight->flight_number }} - {{ $flight->origin }} à {{ $flight->destination }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ticket_number">Numéro de billet:</label>
                <input type="text" class="form-control" name="ticket_number" value="{{ $ticket->ticket_number }}" required>
            </div>

            <div class="form-group">
                <label for="passenger_name">Nom du passager:</label>
                <input type="text" class="form-control" name="passenger_name" value="{{ $ticket->passenger_name }}" required>
            </div>

            <div class="form-group">
                <label for="boarding_gate">Porte d'embarquement:</label>
                <input type="text" class="form-control" name="boarding_gate" value="{{ $ticket->boarding_gate }}" required>
            </div>

            <div class="form-group">
                <label for="class">Classe:</label>
                <input type="text" class="form-control" name="class" value="{{ $ticket->class }}" required>
            </div>

            <div class="form-group">
                <label for="seat">Siège:</label>
                <input type="text" class="form-control" name="seat" value="{{ $ticket->seat }}" required>
            </div>

            <div class="form-group">
                <label for="boarding_time">Heure d'embarquement:</label>
                <input type="datetime-local" class="form-control" name="boarding_time" value="{{ $ticket->boarding_time instanceof DateTime ? $ticket->boarding_time->format('Y-m-d\TH:i') : $ticket->boarding_time }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour le billet</button>
        </form>
    </div>
@endsection
