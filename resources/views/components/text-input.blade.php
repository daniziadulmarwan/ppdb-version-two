@props(['disabled' => false, 'name', 'placeholder'])

<input type="text" class="form-control form-control-lg @error('{{$name}}') is-invalid @enderror" id="{{$name}}" placeholder="{{$placeholder}}" name="{{$name}}">