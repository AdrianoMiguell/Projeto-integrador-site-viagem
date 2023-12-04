@props(['status'])

@if ($status)
    <div>
        {{ $status }}
    </div>
@endif
