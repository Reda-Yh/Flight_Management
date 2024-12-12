<!-- resources/views/tickets/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Ticket')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Edit Ticket</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="passenger_name" name="passenger_name"
                                            placeholder="Passenger Name" value="{{ $ticket->passenger_name }}" required>
                                        <label for="passenger_name">Passenger Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="ticket_number" name="ticket_number"
                                            placeholder="Ticket Number" value="{{ $ticket->ticket_number }}" required>
                                        <label for="ticket_number">Ticket Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="class" name="class" required>
                                            <option value="">Select a Class</option>
                                            <option value="Economy" {{ $ticket->class === 'Economy' ? 'selected' : '' }}>Economy</option>
                                            <option value="Business" {{ $ticket->class === 'Business' ? 'selected' : '' }}>Business</option>
                                            <option value="First Class" {{ $ticket->class === 'First Class' ? 'selected' : '' }}>First Class</option>
                                        </select>
                                        <label for="class">Class</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="seat" name="seat"
                                            placeholder="Seat Number" value="{{ $ticket->seat }}" required>
                                        <label for="seat">Seat Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="boarding_gate" name="boarding_gate"
                                            placeholder="Boarding Gate" value="{{ $ticket->boarding_gate }}" required>
                                        <label for="boarding_gate">Boarding Gate</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="datetime-local" class="form-control" id="boarding_time" name="boarding_time"
                                            value="{{ date('Y-m-d\TH:i', strtotime($ticket->boarding_time)) }}" required>
                                        <label for="boarding_time">Boarding Time</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="flight_id" name="flight_id" required>
                                    <option value="">Select a Flight</option>
                                    @foreach($flights as $flight)
                                        <option value="{{ $flight->id }}" {{ $ticket->flight_id == $flight->id ? 'selected' : '' }}>
                                            Flight {{ $flight->flight_number }} - {{ $flight->origin }} to {{ $flight->destination }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="flight_id">Available Flight</label>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-dark btn-lg flex-grow-1">
                                    <i class="fas fa-save me-2"></i>Update Ticket
                                </button>
                                <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary btn-lg">
                                    <i class="fas fa-times me-2"></i>Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
