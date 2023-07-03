<div class="card-inner">
  <div class="text-center mb-5">
    <div class="preview-block">
        <span class="preview-title overline-title">
          @if ($value)
              On
          @else
              Off
          @endif
        </span>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" @if ($value) checked @endif id="customSwitch2">
            <label class="custom-control-label" for="customSwitch2"></label>
        </div>
    </div>
  </div>
  <div class="text-center mt-3">
    @if ($value)
      <h5 class="text-success badge badge-success">Pendaftaran Dibuka</h5>
    @else
      <h5 class="text-danger badge badge-danger">Pendaftaran Ditutup</h5>
    @endif
  </div>
</div>