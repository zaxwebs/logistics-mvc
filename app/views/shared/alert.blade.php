@php
    $x_alert = flash()->display('success');
@endphp

@if ($x_alert)
    <div class="alert alert-success">
        {{ $x_alert }}
    </div>
@endif
