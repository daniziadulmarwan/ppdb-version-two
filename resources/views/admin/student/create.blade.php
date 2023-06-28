@component('components.modal', ['id' => 'modalCreateNewStudent', 'title' => 'Create New Student'])
  <form class="form-validate is-alter">
    <div class="form-group">
      <div class="form-control-wrap">
          <input type="text" class="form-control form-control-lg form-control-outlined" id="fullname">
          <label class="form-label-outlined" for="fullname">Full Name</label>
      </div>
    </div>

    <div class="form-group">
      <div class="form-control-wrap">
          <input type="text" class="form-control form-control-lg form-control-outlined" id="nisn">
          <label class="form-label-outlined" for="nisn">NISN</label>
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
      <a href="#" class="btn btn-round btn-lg btn-success w-100 block" style="text-align: center !important; display: inline-flex; align-items: center; justify-content: center"><em class="icon ni ni-save"></em><span>Save Information</span> </a>
    </div>
  </form>
@endcomponent
          