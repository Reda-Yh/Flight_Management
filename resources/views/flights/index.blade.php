@extends('layouts.app')

@section('title', 'Liste des vols')

@section('content')

    <h1>Liste des vols</h1>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Numéro de vol</th>
                <th>Origine</th>
                <th>Destination</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flights as $flight)
                <tr>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->origin }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('flights.edit', $flight) }}">Modifier</a>
                        <form action="{{ route('flights.destroy', $flight) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce vol?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <!-- Display other flight details here -->
            @endforeach
        </tbody>
    </table>
@endsection
