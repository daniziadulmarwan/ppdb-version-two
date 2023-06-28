<div class="modal fade" id="{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <!-- Start Header -->
              <div style="display: flex; justify-content: space-between; align-items: center" class="mb-1">
                <h5 class="modal-title">{{ $title }}</h5>
                <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
              </div>
              <!-- End Header -->
                
              <hr class="mb-3">
  
              {{ $slot }}
            </div>
        </div>
    </div>
</div>