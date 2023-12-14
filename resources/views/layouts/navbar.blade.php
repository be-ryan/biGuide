<link rel="stylesheet" href="{{ asset('css/navbar-style.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

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
      <a href="/" class="{{Request::is('/') ? 'active' : ''}}">Home</a>
      <a href="/explore" class="{{Request::is('explore*') ? 'active' : ''}}">Explore</a>
      <a href="/categories" class="{{Request::is('categories') ? 'active' : ''}}">Categories</a>
      <a href="#" class="{{Request::is('about') ? 'active' : ''}}">About Us</a>  
    </div>

    @auth
      <div class="nav-item dropdown ms-auto">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{asset('profileImg/defaultProfile.jpg')}}" alt="" class="rounded-circle" style="width: 32px; height: 32px;">
          Let's explore, {{auth()->user()->name}}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item {{Request::is('users*') ? 'active' : ''}}" href="{{route('users.show', auth()->user()->id)}}">Profile</a></li>
          @if (auth()->user()->role === 'admin')
            <li><a class="dropdown-item {{Request::is('place*') ? 'active' : ''}}" href="{{route('places.index')}}">Dashboard</a></li>
          @endif
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" class="mb-0" method="post">
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
    
  </div>
</nav>