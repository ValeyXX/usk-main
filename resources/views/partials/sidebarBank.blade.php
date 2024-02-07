    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
            <img src="{{ asset('img/futu/bank.png') }}">
          </div>
          <div class="sidebar-brand-text mx-3">Bank</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('bank.index') }}">
            <i class="fas fa-comments-dollar"></i>
            <span>Permintaan</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('bank.topup') }}">
            <i class="fas fa-money-bill"></i>
            <span>Top Up</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('bank.withdrawal') }}">
            <i class="far fa-money-bill-alt"></i>
            <span>Tarik Tunai</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="version"><p>Wildan Asyhabi</p></div>
      </ul>
      <!-- Sidebar -->