<form class="form-validate is-alter" wire:submit.prevent="update">
    <div class="form-group">
        <div class="form-control-wrap">
          <input wire:model="name" type="text" class="form-control form-control-lg @error('name')is-invalid @enderror" id="name" placeholder="Enter Full name">
          @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
    </div>

    <div class="form-group">
      <div class="form-control-wrap">
          <input wire:model="username" type="text" class="form-control form-control-lg @error('username')is-invalid @enderror" id="username" placeholder="Enter username">
          @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
    </div>

    <div class="form-group">
        <div class="form-control-wrap">
            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
            </a>
            <input wire:model="password" type="password" class="form-control form-control-lg @error('password')is-invalid @enderror" id="password" placeholder="Enter password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="form-control-wrap">
            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="confirm_password">
                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
            </a>
            <input wire:model="confirm_password" type="password" class="form-control form-control-lg @error('confirm_password')is-invalid @enderror" id="confirm_password" placeholder="Enter confirm password">
            @error('confirm_password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
      <div class="form-control-wrap">
          <select wire:model="role" class="form-select js-select2 @error('role') is-invalid @enderror" data-ui="lg" id="outlined-select">
              <option hidden>Choose One</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
          </select>
          @error('role')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-lg btn-success w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-send"></em><span>Submit</span></button>
    </div>
</form>