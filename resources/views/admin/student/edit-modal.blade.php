<div class="modal fade" id="modalEditNewStudent">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <!-- Start Header -->
            <div style="display: flex; justify-content: space-between; align-items: center" class="mb-1">
              <h5 class="modal-title">Edit New Student</h5>
              <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <em class="icon ni ni-cross"></em>
              </a>
            </div>
            <!-- End Header -->
              
            <hr class="mb-3" style="border-style: dotted">
            
            <!-- Start Form -->
            @livewire('edit-student')
            <!-- Start Form -->
          </div>
      </div>
  </div>
</div>