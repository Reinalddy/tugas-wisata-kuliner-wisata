    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" aria-current="page" href="{{ url('/dashboard') }}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('dashboard/kuliner')) ? 'active' : '' }}" href="{{ url('/dashboard/kuliner') }}">
              <span data-feather="file" class="align-text-bottom"></span>
              Kuliner
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('dashboard/wisata')) ? 'active' : '' }}" href="{{ url('/dashboard/wisata') }}">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Wisata
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('dashboard/admin-list')) ? 'active' : '' }}" href="{{ url('/dashboard/admin-list') }}">
              <span data-feather="users" class="align-text-bottom"></span>
              Admin
            </a>
          </li>
        </ul>

        {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul> --}}
      </div>
    </nav>