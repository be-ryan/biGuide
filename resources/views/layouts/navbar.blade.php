<link rel="stylesheet" href="{{ asset('css/navbar-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-brand-container">
      <a class="navbar-brand" href="/">
        <span class="bi-part">Bi</span>
        <span class="guide-part">.Guide</span>
      </a>
      <div class="input-group">
        <input type="text" placeholder="Search here" class="form-control search-input">
        <button class="btn btn-primary search-button" type="button">🔍</button>
      </div>
    </div>
    
    <div class="navbar-links align-items-center ms-auto">
      <a href="/" class="{{Request::is('') ? 'active' : ''}}">Home</a>
      <a href="/explore" class="{{Request::is('explore*') ? 'active' : ''}}">Explore</a>
      <div class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
              <li><a class="dropdown-item" href="#">Category 1</a></li>
              <li><a class="dropdown-item" href="#">Category 2</a></li>
              <li><a class="dropdown-item" href="#">Category 3</a></li>
              <li><a class="dropdown-item" href="#">Category 4</a></li>
          </ul>
      </div>
      <a href="#" class="{{Request::is('') ? 'active' : ''}}">About Us</a>  
    </div>

    @auth
      <div class="nav-item dropdown ms-auto">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Let's explore, {{auth()->user()->name}}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          @if (auth()->user()->name === 'test')
            <li><a class="dropdown-item {{Request::is('place*') ? 'active' : ''}}" href="{{route('places.index')}}">Dashboard</a></li>
          @endif
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    @else
      <div class="signin-button ms-auto">
        <a href="/login" class="btn btn-signin">Log In</a>
      </div>
    @endauth
    
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggle-icon"></span>
    </button> --}}
  </div>
</nav>