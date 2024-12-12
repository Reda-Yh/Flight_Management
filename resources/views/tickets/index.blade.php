@extends('layouts.app')

@section('title', 'Ticket List')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark d-flex justify-content-between align-items-center">
            <h4 class="text-white mb-0">Ticket List</h4>
            <a href="{{ route('tickets.create') }}" class="btn btn-success">
                <i class="fas fa-plus-circle me-2"></i>New Ticket
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Ticket Number</th>
                            <th>Flight</th>
                            <th>Passenger</th>
                            <th>Class</th>
                            <th>Seat</th>
                            <th>Gate</th>
                            <th>Boarding</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                        <tr>
                            <td class="fw-bold">{{ $ticket->ticket_number }}</td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    {{ $ticket->flight->flight_number }}
                                </span>
                            </td>
                            <td>{{ $ticket->passenger_name }}</td>
                            <td>
                                <span class="badge bg-{{ $ticket->class === 'First' ? 'warning' : ($ticket->class === 'Business' ? 'primary' : 'secondary') }}">
                                    {{ $ticket->class }}
                                </span>
                            </td>
                            <td>{{ $ticket->seat }}</td>
                            <td>{{ $ticket->boarding_gate }}</td>
                            <td>{{ \Carbon\Carbon::parse($ticket->boarding_time)->format('d/m/Y H:i') }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('tickets.edit', $ticket->id) }}"
                                       class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('tickets.destroy', $ticket->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this ticket?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
