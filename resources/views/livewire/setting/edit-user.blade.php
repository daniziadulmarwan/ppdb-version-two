<form class="form-validate is-alter" wire:submit.prevent="update">
  <div class="form-group">
      <div class="form-control-wrap">
        <input wire:model="nameEdit" type="text" class="form-control form-control-lg @error('nameEdit')is-invalid @enderror" id="nameEdit" placeholder="Enter Full name">
        @error('nameEdit')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="form-group">
    <div class="form-control-wrap">
        <input wire:model="usernameEdit" type="text" class="form-control form-control-lg @error('usernameEdit')is-invalid @enderror" id="usernameEdit" placeholder="Enter username">
        @error('usernameEdit')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="form-group">
      <div class="form-control-wrap">
          <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="passwordEdit">
              <em class="passcode-icon icon-show icon ni ni-eye"></em>
              <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
          </a>
          <input wire:model="passwordEdit" type="password" class="form-control form-control-lg @error('passwordEdit')is-invalid @enderror" id="passwordEdit" placeholder="Enter new password">
          @error('passwordEdit')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
  </div>

  <div class="form-group">
      <div class="form-control-wrap">
          <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="confirm_passwordEdit">
              <em class="passcode-icon icon-show icon ni ni-eye"></em>
              <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
          </a>
          <input wire:model="confirm_passwordEdit" type="password" class="form-control form-control-lg @error('confirm_passwordEdit') is-invalid @enderror" id="confirm_passwordEdit" placeholder="Confirm new password">
          @error('confirm_passwordEdit')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
  </div>

  <div class="form-group">
    <div class="form-control-wrap">
        <select wire:model="roleEdit" class="form-select js-select2 @error('roleEdit') is-invalid @enderror" data-ui="lg" id="roleEdit">
            <option hidden>Choose One</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        @error('roleEdit')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-lg btn-success w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-send"></em><span>Submit</span></button>
  </div>
</form>