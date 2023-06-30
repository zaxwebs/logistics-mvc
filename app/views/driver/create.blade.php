@extends('layouts.app')

@section('content')
    <h1>Add a Driver</h1>
    <form>
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
            Vechicle Number
            <input type="text" id="vechicle_number" name="vechicle_number" placeholder="Vechicle Number" required>
        </label>
        <button type="submit">Add Driver</button>
    </form>
@endsection
