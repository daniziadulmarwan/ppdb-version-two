@props(['name', 'place', 'error'])

<a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="{{ $name }}">
  <em class="passcode-icon icon-show icon ni ni-eye"></em>
  <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
</a>
<input autocomplete="{{ $name }}" type="password" class="form-control form-control-lg {{ $error->has($name) ? 'is-invalid' : '' }}" id="{{ $name }}" placeholder="{{ $place }}" name="{{ $name }}">
