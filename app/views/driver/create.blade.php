@extends('layouts.app')

@section('content')
    <h1>Add a Driver</h1>
    @include('shared.alert')
    <form method="POST" action="/drivers">
        <label for="name">
            Name
            <input type="text" id="name" name="name" placeholder="Name" required>
        </label>
        <label for="name">
            Contact Number
            <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number" required>
        </label>
        <label for="name">
            License Number
            <input type="text" id="license_number" name="license_number" placeholder="License Number" required>
        </label>
        <label for="name">
            Vehicle Number
            <input type="text" id="vehicle_number" name="vehicle_number" placeholder="Vehicle Number" required>
        </label>
        <button type="submit">Add Driver</button>
    </form>
@endsection
