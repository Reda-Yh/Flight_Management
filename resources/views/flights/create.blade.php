<!-- resources/views/flights/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create Flight')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Create a New Flight</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('flights.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="origin" name="origin" placeholder="Origin" required>
                                        <label for="origin">Origin</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Destination" required>
                                        <label for="destination">Destination</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="flight_number" name="flight_number" placeholder="Flight Number" required>
                                        <label for="flight_number">Flight Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="datetime-local" class="form-control" id="departure" name="departure" required>
                                        <label for="departure">Departure Date and Time</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                <label for="name">Name</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-lg">
                                    <i class="fas fa-plane-departure me-2"></i>Create Flight
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
