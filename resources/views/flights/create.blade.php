<!-- resources/views/flights/create.blade.php -->

@extends('layouts.app')

@section('title', 'Créer un vol')

@section('content')

    <div class="container">
        <h1 class="mt-4">Créer un vol</h1>

        <form action="{{ route('flights.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="origin">Origine:</label>
                <input type="text" class="form-control" name="origin" required>
            </div>

            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" class="form-control" name="destination" required>
            </div>

            <div class="form-group">
                <label for="flight_number">Numéro de vol:</label>
                <input type="text" class="form-control" name="flight_number" required>
            </div>

            <div class="form-group">
                <label for="departure">Départ:</label>
                <input type="datetime-local" class="form-control" name="departure" required>
            </div>

            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <button type="submit" class="btn btn-primary">Créer le vol</button>
        </form>
    </div>

@endsection
