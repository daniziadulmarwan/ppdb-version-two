<li class="dropdown notification-dropdown">
  <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
    @if ($total > 0)
      <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
    @else
      <div style="border-radius: 50%; height: 20px;width: 20px; display: flex; justify-content: center; align-items: center"><em class="icon ni ni-bell"></em></div>
    @endif
  </a>
  <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
    <div class="dropdown-head">
        <span class="sub-title nk-dropdown-title">Notifications</span>
    </div>
    <div class="dropdown-body">
        <div class="nk-notification">
          @foreach ($lists as $item)
            <div class="nk-notification-item dropdown-inner" style="cursor: pointer" id="notif-wrapper" wire:click="read({{ $item->id }})">
                <div class="nk-notification-icon">
                  @if ($item->seen_by_user == 'no')
                    <em class="icon icon-circle bg-danger-dim ni ni-curve-down-right"></em>
                  @else
                    <em class="icon icon-circle bg-success-dim ni ni-curve-down-right"></em>
                  @endif
                </div>
                <div class="nk-notification-content">
                    <div class="nk-notification-text">
                      {{ $item->text }}
                    </div>
                    <div class="nk-notification-time">
                      {{ $item->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
    <div class="dropdown-foot center">
        <a href="#">View All</a>
    </div>
  </div>
</li>