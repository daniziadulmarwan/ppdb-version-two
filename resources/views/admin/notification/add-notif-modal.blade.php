<x-modal id="modalCreateNotif">
  <div style="display: flex; justify-content: space-between; align-items: center" class="mb-1">
    <h5 class="modal-title">Add Notification</h5>
    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
        <em class="icon ni ni-cross"></em>
    </a>
  </div>
  <hr class="mb-3" style="border-style: dotted; border-color: rgb(28, 214, 152)">

  <!-- Form Start -->
  @livewire('notif-add-notif')
  <!-- Form End -->
</x-modal>