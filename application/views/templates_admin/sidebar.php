<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">bmw m3</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">civic turbo</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">avanza</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('admin/dashboard'); ?>">Muezza Rental</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MR</a>
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href="<?= base_url('admin/dashboard'); ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

            <li><a class="nav-link" href="<?= base_url('admin/data_mobil'); ?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>

            <li><a class="nav-link" href="<?= base_url('admin/data_tipe'); ?>"><i class="fas fa-grip-horizontal"></i> <span>Data Tipe</span></a></li>

            <li><a class="nav-link" href="<?= base_url('admin/data_customer'); ?>"><i class="fas fa-users"></i> <span>Data Customer</span></a></li>

            <li><a class="nav-link" href="<?= base_url('admin/transaksi'); ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>

            <li><a class="nav-link" href="<?= base_url('admin/laporan'); ?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li>

            <li><a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>

            <li><a class="nav-link" href="<?= base_url('auth/ganti_password'); ?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li>
          </ul>

        </aside>
      </div>