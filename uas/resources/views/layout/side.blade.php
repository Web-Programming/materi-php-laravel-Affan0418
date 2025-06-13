<div class="col-md-3 col-lg-2 d-md-block bg-white sidebar pt-4 shadow-sm">
  <div class="list-group list-group-flush">
    <a href="/dashboard" class="list-group-item list-group-item-action {{(request()->is('dashboard')) ? 'active' : ''}}">
      <i class="fas fa-home me-2"></i>Dashboard
    </a>
    <a href="#" class="list-group-item list-group-item-action">
      <i class="fas fa-box me-2"></i>My Orders
    </a>
    <a href="#" class="list-group-item list-group-item-action">
      <i class="fas fa-user me-2"></i>Profile
    </a>
    <a href="#" class="list-group-item list-group-item-action">
      <i class="fas fa-cog me-2"></i>Settings
    </a>
    <a href="{{ route('login') }}" class="list-group-item list-group-item-action me-2">
      <i class="nav-icon fas fa-power-off"></i>Logout
    </a>
  </div>
</div>