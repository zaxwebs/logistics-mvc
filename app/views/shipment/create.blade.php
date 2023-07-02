@extends('layouts.app')

@section('content')
    <h1>Add a Shipment</h1>
    @include('shared.alert')
    <form method="POST" action="/shipments">
        <label for="user_id">
            User ID
            <input type="text" id="user_id" name="user_id" placeholder="User ID" required>
        </label>
        <label for="shipment_number">
            Shipment Number
            <input type="text" id="shipment_number" name="shipment_number" placeholder="Shipment Number" required>
        </label>
        <label for="sender_name">
            Sender Name
            <input type="text" id="sender_name" name="sender_name" placeholder="Sender Name" required>
        </label>
        <label for="sender_address">
            Sender Address
            <input type="text" id="sender_address" name="sender_address" placeholder="Sender Address" required>
        </label>
        <label for="receiver_name">
            Receiver Name
            <input type="text" id="receiver_name" name="receiver_name" placeholder="Receiver Name" required>
        </label>
        <label for="receiver_address">
            Receiver Address
            <input type="text" id="receiver_address" name="receiver_address" placeholder="Receiver Address" required>
        </label>
        <label for="status">
            Status
            <input type="text" id="status" name="status" placeholder="Status" required>
        </label>
        <label for="estimated_delivery_date">
            Estimated Delivery Date
            <input type="date" id="estimated_delivery_date" name="estimated_delivery_date" required>
        </label>
        <label for="actual_delivery_date">
            Actual Delivery Date
            <input type="date" id="actual_delivery_date" name="actual_delivery_date">
        </label>
        <button type="submit">Add Shipment</button>
    </form>
@endsection
