<x-modal id="modalCreateNewUser">
  <!-- Start Header -->
  <div style="display: flex; justify-content: space-between; align-items: center" class="mb-1">
    <h5 class="modal-title">Create New User</h5>
    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
        <em class="icon ni ni-cross"></em>
    </a>
  </div>
  <!-- End Header -->
    
  <hr class="mb-3" style="border-style: dotted; border-color: rgb(28, 214, 152)">

  <!-- Start Form -->
  @livewire('create-new-user')
  <!-- Start Form -->
</x-modal>