@extends('layouts.app')

@section('content')
    <h1>Create Assignment</h1>
    @include('shared.alert')
    <form method="POST" action="/assignments">
        <label for="shipment_id">
            Shipment
            <select id="shipment_id" name="shipment_id" required>
                <option value="">Select a shipment</option>
                @foreach ($shipments as $shipment)
                    <option value="{{ $shipment->id }}">{{ $shipment->number }}</option>
                @endforeach
            </select>
        </label>
        <label for="driver_id">
            Driver
            <select id="driver_id" name="driver_id" required>
                <option value="">Select a driver</option>
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                @endforeach
            </select>
        </label>
        <label for="assigned_date">
            Assigned Date
            <input type="date" id="assigned_date" name="assigned_date" required>
        </label>
        <label for="pickup_date">
            Pickup Date
            <input type="date" id="pickup_date" name="pickup_date">
        </label>
        <label for="delivery_date">
            Delivery Date
            <input type="date" id="delivery_date" name="delivery_date">
        </label>
        <button type="submit">Create Assignment</button>
    </form>
@endsection