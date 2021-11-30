<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url(); ?>" class="brand-link">
    <img src="<?= base_url(); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Arya Winata</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>/numerik/bagiDua" class="nav-link <?= $title == "Metode Bagi Dua" ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Metode Bagi Dua</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/numerik/regulaFalsi" class="nav-link <?= $title == "Metode Regula Falsi" ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Metode Regula Falsi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/numerik/iterasiTitikTetap" class="nav-link <?= $title == "Metode Iterasi Titik Tetap" ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Metode Iterasi Titik Tetap</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/numerik/newtonRaphson" class="nav-link <?= $title == "Metode Newton Raphson" ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Metode Newton Raphson</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>/numerik/secant" class="nav-link <?= $title == "Metode Secant" ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Metode Secant</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>