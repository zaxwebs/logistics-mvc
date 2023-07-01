@extends('layouts.app')

@section('content')
    <div class="flex center-between mb-3">
        <h1 class="mb-0">Drivers</h1>
        <a role="button" href="/drivers/create">Add a Driver</a>
    </div>

    @include('shared.alert')


    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">License Number</th>
                <th scope="col">Vehicle Number</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <th scope="row">{{ $driver->id }}</th>
                    <td>{{ $driver->name }}</td>
                    <td>{{ $driver->contact_number }}</td>
                    <td>{{ $driver->license_number }}</td>
                    <td>{{ $driver->vehicle_number }}</td>
                    <td>
                        <form class="mb-0" method="post" action="/drivers/{{ $driver->id }}/delete">
                            <input class="secondary outline mb-0" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
