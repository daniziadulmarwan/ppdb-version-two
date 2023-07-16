<form class="form-validate is-alter" wire:submit.prevent="save">
  @csrf
  <div class="form-group" wire:ignore>
    <label class="form-label">Choose User to Notif</label>
    <div class="form-control-wrap">
        <select wire:model="ids" class="form-select js-select2 @error('ids') is-invalid @enderror" multiple="multiple" id="multi-user-select">
            <option disabled>Choose User</option>
            @foreach ($data as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        @error('ids')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="form-group">
    <label class="form-label" for="default-textarea">Notification Text</label>
    <div class="form-control-wrap">
        <textarea wire:model="text" class="form-control no-resize @error('text') is-invalid @enderror" id="default-textarea" placeholder="Write here the notif" name="text"></textarea>
    </div>
    @error('text')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-lg btn-success w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-send"></em><span>Submit</span></button>
  </div>
  
</form>

  <script>
    document.addEventListener('livewire:load', function () {
      $('#multi-user-select').on('change', function() {
        @this.ids = $(this).val();
      });
    });
  </script>