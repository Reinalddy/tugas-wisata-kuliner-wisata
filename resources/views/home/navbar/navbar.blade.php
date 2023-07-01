<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
      <a class="navbar-brand" href="#!"><span style="color: #5e9693;">Bekasi</span><span style="color: #fff;">Kotaku</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link text-bold {{ (request()->is('/')) ? 'text-white' : '' }}" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('wisata')) ? 'text-white' : '' }}" href="{{ url('/wisata') }}">Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('kuliner')) ? 'text-white' : '' }}" href="{{ url('/kuliner') }}">Kuliner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('about-us')) ? 'text-white' : '' }}" href="{{ url('/about-us') }}">About Us</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!--Section: Design Block-->
  <!--Section: Design Block-->
</header>