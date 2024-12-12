@extends('layouts.app')

@section('title', 'Flight List')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark d-flex justify-content-between align-items-center">
            <h4 class="text-white mb-0">Flight List</h4>
            <a href="{{ route('flights.create') }}" class="btn btn-success">
                <i class="fas fa-plus-circle me-2"></i>New Flight
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Flight Number</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Departure</th>
                            <th>Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($flights as $flight)
                        <tr>
                            <td class="fw-bold">{{ $flight->flight_number }}</td>
                            <td>{{ $flight->origin }}</td>
                            <td>{{ $flight->destination }}</td>
                            <td>{{ \Carbon\Carbon::parse($flight->departure)->format('d/m/Y H:i') }}</td>
                            <td>{{ $flight->name }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('flights.edit', $flight->id) }}"
                                       class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('flights.destroy', $flight->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this flight?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
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
