<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="/index"><img src="{{ asset('assets/images/griffy-logo.svg') }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="/index"><img src="{{ asset('assets/images/griffy Icon.ico') }}" alt="logo" /></a>
    </div>
    <ul class="nav">

      {{-- PROFILE --}}
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/RealPeople/Rick.jpg') }}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{ Auth::user()->userName }}</h5>
              <span>BINUS University</span>
            </div>
          </div>
          <a href="/home" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
          
          </div>
        </div>
      </li>

      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>

      {{-- DASHBOARD --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="/home">
          <span class="menu-icon">
            <i class="mdi mdi-view-carousel"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      {{-- POSTS --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="/home">
          <span class="menu-icon">
            <i class="mdi mdi-panorama-horizontal"></i>
          </span>
          <span class="menu-title">Explore Highlights</span>
          {{-- <i class="menu-arrow"></i> --}}
        </a>
        {{-- DROPDOWN --}}
        {{-- <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div> --}}
      </li>

      {{-- FRIENDS --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="/home">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">Friends</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="/home">
          <span class="menu-icon">
            <i class=" mdi mdi-calendar-text "></i>
          </span>
          <span class="menu-title">Events</span>
        </a>
      </li>

      
      
      
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu"> 


            


            <li class="nav-item"> 
              <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

            </li>
          </ul>
        </div>
      </li>
      
    </ul>
  </nav>