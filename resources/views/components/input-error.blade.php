@props(['disabled' => false, 'name', '$errormsg'])

@error('{{$name}}')
  <div class="invalid-feedback">{{ $errormsg }}</div>
@enderror