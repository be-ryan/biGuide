<link rel="stylesheet" href="{{ asset('css/navbar-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-brand-container">
      <a class="navbar-brand" href="#">
        <span class="bi-part">Bi</span>
        <span class="guide-part">.Guide</span>
    </a>
      <div class="input-group">
        <input type="text" placeholder="Search here" class="form-control search-input">
        <button class="btn btn-primary search-button" type="button">🔍</button>
      </div>
    </div>
    {{-- <div class="navbar-links">
      <a href="#">Home</a>
      <a href="#">Explore</a>
      <a href="#">Categories</a>
      <a href="#">About Us</a>
    </div> --}}
    
    <div class="navbar-links align-items-center">
      <a href="/home">Home</a>
      <a href="/explore">Explore</a>
      <div class="dropdown">
          <a class="dropdown-toggle" href="{{ route('catpage') }}" role="button" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
              <li><a class="dropdown-item" href="#">Category 1</a></li>
              <li><a class="dropdown-item" href="#">Category 2</a></li>
              <li><a class="dropdown-item" href="#">Category 3</a></li>
              <li><a class="dropdown-item" href="#">Category 4</a></li>
          </ul>
      </div>
      <a href="#">About Us</a>
  </div>
  

    <div class="signin-container">
      <div class="avatar">
        <!-- avatar -->
        <img src="{{ asset('img/avatar_account.png') }}" alt="Avatar" class="darken">
      </div>
      <div class="signin-button">
        <button class="btn btn-signin">Sign In</button>
      </div>
    </div>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggle-icon"></span>
    </button>
  </div>
</nav>