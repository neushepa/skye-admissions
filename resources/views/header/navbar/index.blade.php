@php
    $route = Route::current()->getName()
@endphp

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../front/img/skye-logo.png" alt="">
        {{-- <h1 class="d-flex align-items-center">SKYE DIGIPRENEUR</h1> --}}
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          {{-- <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li> --}}
          <li><a href="team.html">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                        <li><a href="#">Deep Dropdown 3</a></li>
                        <li><a href="#">Deep Dropdown 4</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
            </ul>
        </li> --}}
        <li><a href="contact.html">Contact</a></li>
        <li><a href="{{ route('registration') }}" class="{{ ($route == 'registration') ? 'active' : '' }}">Registration</a></li>
        </ul>
      </nav>

    </div>
  </header>
