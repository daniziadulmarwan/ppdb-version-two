<form wire:submit.prevent="updatePassword">
  <div class="form-group">
    <div class="form-label-group">
        <label class="form-label" for="newPassword">New Password</label>
    </div>
    <div class="form-control-wrap">
        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="newPassword">
            <em class="passcode-icon icon-show icon ni ni-eye"></em>
            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
        </a>
        <input wire:model="newPassword" autocomplete="new-password" type="password" class="form-control form-control-lg @error('newPassword') is-invalid @enderror" id="newPassword" placeholder="Enter your new password">
        @error('newPassword')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="form-group">
    <div class="form-label-group">
        <label class="form-label" for="confirmNewPassword">Repeat New Password</label>
    </div>
    <div class="form-control-wrap">
        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="confirmNewPassword">
            <em class="passcode-icon icon-show icon ni ni-eye"></em>
            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
        </a>
        <input wire:model="confirmNewPassword" autocomplete="new-password" type="password" class="form-control form-control-lg @error('confirmNewPassword') is-invalid @enderror" id="confirmNewPassword" placeholder="Repeat your new password">
        @error('confirmNewPassword')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="form-group">
      <button type="submit" class="btn btn-lg btn-primary">Submit</button>
  </div>
</form>