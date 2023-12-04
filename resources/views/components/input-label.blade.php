@props(['value'])

<label class = "form-label">
    {{ $value ?? $slot }}
</label>
