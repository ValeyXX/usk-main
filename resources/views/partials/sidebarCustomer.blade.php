    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
            <img src="{{ asset('img/futu/logoweb2.png') }}">
          </div>
          <div class="sidebar-brand-text mx-3">Hal-User</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('customer.index') }}">
            <i class="fas fa-dollar-sign"></i>
            <span>Saldo</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('canteen.index') }}">
            <i class="fas fa-shopping-bag"></i>
            <span>Kantin</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('keranjang.index') }}">
            <i class="fas fa-shopping-basket"></i>
            <span>Keranjang</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="version"><p>Wildan Asyhabi</p></div>
      </ul>
      <!-- Sidebar -->