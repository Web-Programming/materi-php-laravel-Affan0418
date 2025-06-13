<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fas fa-drumstick-bite"></i> Richeese Chicken</a>
    <div class="d-flex">
    <li class="nav-item dropdown user-menu">
    <a href="#" class="nav-link">
     <img src="{{ asset('img/Affan.jpg') }}" class="user-image img-circle elevation-2" alt="Image">
     <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
    </div>
  </div>
</nav>