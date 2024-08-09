@extends('layouts.app')

@section('title', 'Liste des billets')

@section('content')
    <h1>Liste des billets</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Numéro de billet</th>
                <th>Nom du passager</th>
                <th>Numéro de vol</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->ticket_number }}</td>
                    <td>{{ $ticket->passenger_name }}</td>
                    <td>{{ $ticket->flight->flight_number }}</td>
                    <td>
                        <a href="{{ route('tickets.edit', $ticket) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('tickets.destroy', $ticket) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce billet?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <!-- Display other ticket details here -->
            @endforeach
        </tbody>
    </table>
@endsection
