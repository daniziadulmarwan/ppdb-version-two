@props(['type' => 'text', 'name', 'place', 'error'])

<input type="{{ $type }}" class="form-control form-control-lg {{ $error->has($name) ? 'is-invalid' : '' }}" id="{{ $name }}" placeholder="{{ $place }}" name="{{ $name }}">