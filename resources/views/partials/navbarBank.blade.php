<title>Bank</title>
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow mr-5">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img class="img-profile rounded-circle" src="{{ asset('img/futu/bank.png') }}" style="max-width: 60px">
                  <span class="ml-2 d-none d-lg-inline text-white small">{{ auth()->user()->role }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- Topbar -->




          <!-- Dropdown -->
    


        <!-- Dropdown -->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <ol class="breadcrumb">
                        <div class="dropdown">
                            <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle" type="button"
                                id="reportDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-download fa-sm text-white-50"></i> Laporan
                            </button>
                        <div class="dropdown-menu" aria-labelledby="reportDropdown">
                            <a class="dropdown-item" href="{{ route('bank.laporan.topup') }}">
                                <i class="fas fa-file-invoice-dollar"></i> Top Up
                            </a>
                            <a class="dropdown-item" href="{{ route('bank.laporan.withdrawal') }}">
                                <i class="fas fa-file-invoice-dollar"></i> Tarik Tunai
                            </a>
                        </div>
                    </div>
                </ol>
            </div>
        </div>
        <!-- Dropdown -->
          