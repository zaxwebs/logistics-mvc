@extends('layouts.app')

@section('content')
    <div class="flex center-between mb-3">
        <h1 class="mb-0">Shipments</h1>
        <a role="button" href="/shipments/create">Add a Shipment</a>
    </div>

    @include('shared.alert')

    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Shipment Number</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Sender Address</th>
                <th scope="col">Receiver Name</th>
                <th scope="col">Receiver Address</th>
                <th scope="col">Status</th>
                <th scope="col">Estimated Delivery Date</th>
                <th scope="col">Actual Delivery Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shipments as $shipment)
                <tr>
                    <th scope="row">{{ $shipment->id }}</th>
                    <td>{{ $shipment->number }}</td>
                    <td>{{ $shipment->sender_name }}</td>
                    <td>{{ $shipment->sender_address }}</td>
                    <td>{{ $shipment->receiver_name }}</td>
                    <td>{{ $shipment->receiver_address }}</td>
                    <td>{{ $shipment->status }}</td>
                    <td>{{ $shipment->estimated_delivery_date }}</td>
                    <td>{{ $shipment->actual_delivery_date }}</td>
                    <td>
                        <form class="mb-0" method="post" action="/shipments/{{ $shipment->id }}/delete">
                            <input class="secondary outline mb-0" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
