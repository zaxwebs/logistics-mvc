@extends('layouts.app')

@section('content')
    <div class="flex center-between mb-3">
        <h1 class="mb-0">Assignments</h1>
        <a role="button" href="/assignments/create">Add an Assignment</a>
    </div>

    @include('shared.alert')

    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Shipment Number</th>
                <th scope="col">Driver</th>
                <th scope="col">Assigned Date</th>
                <th scope="col">Pickup Date</th>
                <th scope="col">Delivery Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assignments as $assignment)
                <tr>
                    <th scope="row">{{ $assignment->id }}</th>
                    <td>
						@if ($assignment->shipment)
							{{ $assignment->shipment->number }}
						@endif
					</td>
                    <td><a href="/drivers/{{ $assignment->driver->id }}">{{ $assignment->driver->name }}</a></td>
                    <td>{{ $assignment->assigned_date }}</td>
                    <td>{{ $assignment->pickup_date }}</td>
                    <td>{{ $assignment->delivery_date }}</td>
                    <td>
                        <form class="mb-0" method="post" action="/assignments/{{ $assignment->id }}/delete">
                            <input class="secondary outline mb-0" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
