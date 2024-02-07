    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
            <img src="{{ asset('img/futu/logoweb1.png') }}">
          </div>
          <div class="sidebar-brand-text mx-3">Warung Wildan</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('kantin.index') }}">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('produk.index') }}">
            <i class="fas fa-shopping-bag"></i>
            <span>Produk</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('kategori.index') }}">
            <i class="fas fa-shopping-basket"></i>
            <span>Kategori</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="version"><p>Wildan Asyhabi</p></div>
      </ul>
      <!-- Sidebar -->