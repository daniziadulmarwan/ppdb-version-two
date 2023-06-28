<form class="form-validate is-alter" wire:submit.prevent="save">
    <div class="form-group">
        <label class="form-label" for="fullname">Fullname</label>
        <div class="form-control-wrap">
            <input wire:model="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname">
            @error('fullname')
                <div class="invalid-feedback">
                    <i>{{ $message }}</i>
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
      <div class="form-control-wrap">
          <input type="text" class="form-control form-control-lg form-control-outlined" id="username">
          <label class="form-label-outlined" for="username">Username</label>
      </div>
    </div>

    <div class="form-group">
      <div class="form-control-wrap">
          <select class="form-select js-select2" data-ui="lg" id="outlined-select">
              <option hidden>Choose One</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
          </select>
          <label class="form-label-outlined" for="outlined-select">Role</label>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-round btn-lg btn-success w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-save"></em><span>Save Information</span> </button>
    </div>
</form>
