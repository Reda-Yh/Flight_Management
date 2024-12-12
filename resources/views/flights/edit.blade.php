<!-- resources/views/flights/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Flight')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Edit Flight</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('flights.update', $flight->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="origin" name="origin"
                                            placeholder="Origin" value="{{ $flight->origin }}" required>
                                        <label for="origin">Origin</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="destination" name="destination"
                                            placeholder="Destination" value="{{ $flight->destination }}" required>
                                        <label for="destination">Destination</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="flight_number" name="flight_number"
                                            placeholder="Flight Number" value="{{ $flight->flight_number }}" required>
                                        <label for="flight_number">Flight Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="datetime-local" class="form-control" id="departure" name="departure"
                                            value="{{ date('Y-m-d\TH:i', strtotime($flight->departure)) }}" required>
                                        <label for="departure">Departure Date and Time</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name" value="{{ $flight->name }}" required>
                                <label for="name">Name</label>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-dark btn-lg flex-grow-1">
                                    <i class="fas fa-plane me-2"></i>Update Flight
                                </button>
                                <a href="{{ route('flights.index') }}" class="btn btn-outline-secondary btn-lg">
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
