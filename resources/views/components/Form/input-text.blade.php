@props(['name', 'place', 'error'])

<input type="text" class="form-control form-control-lg {{ $error->has('username') ? 'is-invalid' : '' }}" id="{{ $name }}" placeholder="{{ $place }}" name="{{ $name }}">