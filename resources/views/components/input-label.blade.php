@props(['disabled' => false, 'text', 'for'])

<div class="form-label-group">
    <label class="form-label" for="{{ $for }}">{{ $text }}</label>
</div>