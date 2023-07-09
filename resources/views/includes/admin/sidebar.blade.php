<!-- Start Sidebar -->
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
  <div class="nk-sidebar-element nk-sidebar-head">
      <div class="nk-sidebar-brand">
          <a href="/admin/dashboard" class="logo-link nk-sidebar-logo">
              <img class="logo-light logo-img" src="/assets/images/ppdb-light.png" srcset="/assets/images/ppdb-light.png 2x" alt="logo">

              <img class="logo-dark logo-img" src="/assets/images/ppdb-dark.png" srcset="/assets/images/ppdb-dark.png 2x" alt="logo-dark">

              <img class="logo-small logo-img logo-img-small" src="/assets/images/logo.png" srcset="/assets/images/logo.png 2x" alt="logo-small">
          </a>
      </div>
      <div class="nk-menu-trigger me-n2">
          <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-menu-alt-left"></em></a>
          <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu-alt-left"></em></a>
      </div>
  </div>
  
  <div class="nk-sidebar-element">
      <div class="nk-sidebar-content">
          <div class="nk-sidebar-menu" data-simplebar>
              <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        {{-- <h6 class="overline-title text-primary-alt">Start Up</h6> --}}
                        <h6 class="overline-title text-primary-alt">Applications</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/admin/dashboard" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-alt-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/admin/student" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                            <span class="nk-menu-text">Students</span>
                        </a>
                    </li>
                    {{-- <li class="nk-menu-item">
                        <a href="/admin/document" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-archived-fill"></em></span>
                            <span class="nk-menu-text">Documents</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/admin/contact" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Contacts</span>
                        </a>
                    </li> --}}

                    <!-- Administrator Start -->
                    @if (auth()->user()->role == 'admin')
                        {{-- <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Applications</h6>
                        </li> --}}
                        <li class="nk-menu-item">
                            <a href="/admin/notif" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-bell-fill"></em></span>
                                <span class="nk-menu-text">Notifications</span>
                            </a>
                        </li>
                    @endif
                    <!-- Administrator Start -->

                    <li class="nk-menu-item">
                        <a href="/admin/setting" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li>
              </ul>
          </div>
      </div>
  </div>
  
</div>
<!-- End Sidebar -->