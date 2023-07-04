@extends('layouts.app')

@section('content')
    <h1>Driver Information</h1>
    @include('shared.alert')

    <div class="max-w-lg">
        <table>
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $driver->name }}</td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td>{{ $driver->contact_number }}</td>
                </tr>
                <tr>
                    <th>License Number</th>
                    <td>{{ $driver->license_number }}</td>
                </tr>
                <tr>
                    <th>Vehicle Number</th>
                    <td>{{ $driver->vehicle_number }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
