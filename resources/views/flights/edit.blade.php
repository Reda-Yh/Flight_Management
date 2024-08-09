<!-- resources/views/flights/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Modifier un vol')

@section('content')

    <div class="container">
        <h1 class="mt-4">Modifier un vol</h1>

        <form action="{{ route('flights.update', $flight) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="origin">Origine:</label>
                <input type="text" class="form-control" name="origin" value="{{ $flight->origin }}" required>
            </div>

            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" class="form-control" name="destination" value="{{ $flight->destination }}" required>
            </div>

            <div class="form-group">
                <label for="flight_number">Numéro de vol:</label>
                <input type="text" class="form-control" name="flight_number" value="{{ $flight->flight_number }}" required>
            </div>

            <div class="form-group">
                <label for="departure">Départ:</label>
                <input type="datetime-local" class="form-control" name="departure" value="{{ $flight->departure instanceof DateTime ? $flight->departure->format('Y-m-d\TH:i') : $flight->departure }}" required>
            </div>

            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" name="name" value="{{ $flight->name }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour le vol</button>
        </form>
    </div>

@endsection
