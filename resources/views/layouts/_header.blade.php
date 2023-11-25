<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="{{ route('/') }}">Lonely</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ route('/') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ route('about') }}">About Me</a></li>
        <li><a class="nav-link scrollto" href="{{ route('projects') }}">Projects</a></li>        
        <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>