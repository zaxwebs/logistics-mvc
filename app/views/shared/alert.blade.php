@php
    $x_alert = flash()->display('success');
@endphp

@if ($x_alert)
    <div class="alert alert-success">
        {{ $x_alert }}
    </div>
@endif

@if (!empty($_SESSION['errors']))
    <div class="alert alert-success alert-danger">
        <ul class="mb-0">
            @foreach ($_SESSION['errors'] as $error)
                <li>{{ ucfirst($error) }}</li>
            @endforeach
        </ul>
    </div>
@endif
@php
    unset($_SESSION['errors']);
@endphp
