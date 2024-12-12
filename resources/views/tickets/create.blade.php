<!-- resources/views/tickets/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create Ticket')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Create a New Ticket</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tickets.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="passenger_name" name="passenger_name" placeholder="Passenger Name" required>
                                        <label for="passenger_name">Passenger Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="ticket_number" name="ticket_number" placeholder="Ticket Number" required>
                                        <label for="ticket_number">Ticket Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="class" name="class" required>
                                            <option value="">Select a Class</option>
                                            <option value="Economy">Economy</option>
                                            <option value="Business">Business</option>
                                            <option value="First Class">First Class</option>
                                        </select>
                                        <label for="class">Class</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="seat" name="seat" placeholder="Seat Number" required>
                                        <label for="seat">Seat Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="boarding_gate" name="boarding_gate" placeholder="Boarding Gate" required>
                                        <label for="boarding_gate">Boarding Gate</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="datetime-local" class="form-control" id="boarding_time" name="boarding_time" required>
                                        <label for="boarding_time">Boarding Time</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="flight_id" name="flight_id" required>
                                    <option value="">Select a Flight</option>
                                    @foreach($flights as $flight)
                                        <option value="{{ $flight->id }}">
                                            Flight {{ $flight->flight_number }} - {{ $flight->origin }} to {{ $flight->destination }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="flight_id">Available Flight</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-lg">
                                    <i class="fas fa-ticket-alt me-2"></i>Create Ticket
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
