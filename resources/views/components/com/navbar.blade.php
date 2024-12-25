<head><link rel="stylesheet" href="{{asset("style.css")}}"></head>
    <style>
        
    </style>
    <body>
    <nav class="navbar navbar-dark bg-transparent fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo-img" src="{{ asset('/logo.png') }}" /></a>
    <button class="navbar-toggler bg-black" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active:bg-stone-700 active:text-white" aria-current="page" href="{{url('')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active:bg-stone-700 active:text-white" href="{{url('contact')}}">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item active:bg-stone-700 active:text-white" href="{{url('product')}}">All</a></li>
              <li><a class="dropdown-item active:bg-stone-700 active:text-white" href="{{url('product/e-commerce')}}">E-Commerce Sites</a></li>
              <li><a class="dropdown-item active:bg-stone-700 active:text-white" href="{{url('product/blog')}}">Blog Sites</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active:bg-stone-700 active:text-white" href={{url('/login')}}>Login</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav></body>
