<form class="form-validate is-alter" wire:submit.prevent="submit">
    <div class="form-group">
        <label class="form-label">Choose User to Notif</label>
        <div class="form-control-wrap">
            <select wire:model="userToNotif" class="form-select js-select2 @error('userToNotif') is-invalid @enderror" multiple="multiple" id="multi-user-select">
                <option disabled>Choose User</option>
                @foreach ($dataUsers as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('userToNotif')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="form-label" for="default-textarea">Notification Text</label>
        <div class="form-control-wrap">
            <textarea wire:model="text" class="form-control no-resize @error('text')is-invalid @enderror" id="default-textarea" placeholder="Write here the notif"></textarea>
        </div>
        @error('text')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-lg btn-success w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-send"></em><span>Submit</span></button>
    </div>
</form>