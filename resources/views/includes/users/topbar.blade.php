<!-- Start Topbar -->
<div class="nk-header nk-header-fixed is-light">
  <div class="container-fluid">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger d-xl-none ms-n1">
        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
      </div>
      <div class="nk-header-brand d-xl-none">
        <a href="/admin/dashboard" class="logo-link">
            <img class="logo-light logo-img" src="/assets/images/ppdb-light.png" srcset="/assets/images/ppdb-light.png 2x" alt="logo">
            <img class="logo-dark logo-img" src="/assets/images/ppdb-dark.png" srcset="/assets/images/ppdb-dark.png 2x" alt="logo-dark">
        </a>
      </div>
      
      <div class="nk-header-tools">
        <ul class="nk-quick-nav">
          
          <!-- Start Notification -->
          @livewire('notif-list')

          <!-- Start User -->
          <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                  <div class="user-toggle">
                      <div class="user-avatar sm">
                          <em class="icon ni ni-user-alt"></em>
                      </div>
                      <div class="user-info d-none d-xl-block">
                          @if (auth()->user()->role == 'admin')
                              <div class="user-status user-status-unverified text-success">
                                  Administrator
                              </div>
                          @else
                              <div class="user-status user-status-unverified text-warning">
                                  Operator
                              </div>
                          @endif
                          <div class="user-name dropdown-indicator">
                              {{ auth()->user()->name }}
                          </div>
                      </div>
                  </div>
              </a>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                  <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                      <div class="user-card">
                          <div class="user-avatar">
                              <span>ZM</span>
                          </div>
                          <div class="user-info">
                              <span class="lead-text">{{ auth()->user()->name }}</span>
                              <span class="sub-text">{{ auth()->user()->username }}</span>
                          </div>
                      </div>
                  </div>
                  <div class="dropdown-inner">
                      <ul class="link-list">
                          <li><a href="/admin/student"><em class="icon ni ni-user-alt"></em><span>Student</span></a></li>

                          <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>

                          <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>

                          <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                      </ul>
                  </div>
                  <div class="dropdown-inner">
                      <ul class="link-list">
                          <li>
                              <form action="/signout" method="post">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn p-0" style="font-size: 14px; color: #8094ae; font-weight: 500"><em class="icon ni ni-signout"></em><span>Sign Out</span></button></li>
                              </form>
                      </ul>
                  </div>
              </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Topbar -->