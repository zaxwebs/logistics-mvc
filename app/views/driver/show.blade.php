@extends('layouts.app')

@section('content')
    <h1>Driver Information</h1>
    @include('shared.alert')

    <div class="driver-info">
        <p><strong>Name:</strong> {{ $driver->name }}</p>
        <p><strong>Contact Number:</strong> {{ $driver->contact_number }}</p>
        <p><strong>License Number:</strong> {{ $driver->license_number }}</p>
        <p><strong>Vehicle Number:</strong> {{ $driver->vehicle_number }}</p>
    </div>
@endsection
