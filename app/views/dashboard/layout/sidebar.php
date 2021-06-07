<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed !important">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 d-flex">
      <div class="image">
        <img src="../../../assets/img/user.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $_SESSION['nama']; ?></a>
        <p class="text-secondary"><?= $_SESSION['level']; ?></p>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column">
        <li class="nav-header">MAIN MENU</li>
        <li class="nav-item">
          <a href="../pages/home.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../pages/customerService.php" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Customer Service
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../pages/kurir.php" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Kurir
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../pages/kendaraan.php" class="nav-link">
            <i class="nav-icon fas fa-truck"></i>
            <p>
              Kendaraan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Paket
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-history"></i>
            <p>
              History
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>