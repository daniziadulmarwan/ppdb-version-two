@props([
  'disabled' => false, 'name', 'error'
])

@if ($error->has($name))
  <div class="invalid-feedback">{{ $error->first($name) }}</div>
@endif