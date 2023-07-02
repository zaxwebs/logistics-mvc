@extends('layouts.app')

@section('content')
    <div class="flex center-between mb-3">
        <h1 class="mb-0">Users</h1>
        <a role="button" href="/users/create">Add a User</a>
    </div>

    @include('shared.alert')

    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form class="mb-0" method="post" action="/users/{{ $user->id }}/delete">
                            <input class="secondary outline mb-0" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
