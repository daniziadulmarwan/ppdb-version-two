@props(['id', 'title'])

<div class="modal fade" id="{{ $id }}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div style="display: flex; justify-content: space-between; align-items: center" class="mb-1">
          <h5 class="modal-title">{{ $title }}</h5>
          <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
              <em class="icon ni ni-cross"></em>
          </a>
        </div>
        <hr class="mb-3" style="border-style: dotted; border-color: rgb(28, 214, 152)">

        {{ $slot }}
        
      </div>
    </div>
  </div>
</div>