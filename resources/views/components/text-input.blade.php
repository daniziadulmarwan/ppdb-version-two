@props(['disabled' => false, 'name', 'place', 'error'])

<input type="text" class="form-control form-control-lg {{ $error ? 'is-invalid' : '' }}" id="{{ $name }}" placeholder="{{ $place }}" name="{{ $name }}">