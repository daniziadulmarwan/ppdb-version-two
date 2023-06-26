<div class="col-md-12 nk-block">
    <div class="card">
      <div class="nk-ecwg nk-ecwg6">
        <div class="card-inner">
          <div class="power-switch-wrapper py-5">
            <input wire:model="switch" type="checkbox" id="toggle" class="power-switch-button" @if ($switch == 'on') checked @endif />
            <label for="toggle" class="toggleWrapper" >
              <div class="toggle" wire:click="changeSwitch"></div>
            </label>
            
            <div class="background"></div>
          </div>
  
          <div class="text-center mt-3">
            <h5 class="text-danger badge badge-danger">Pendaftaran Ditutup</h5>
          </div>
        </div>
      </div>
    </div>
</div>
