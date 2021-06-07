<?php
require_once 'top.php';

session_start();

if (!$_SESSION['login']) {
  header('Location: ../../public/pages/login.php');
}
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto d-flex align-items-center">
    <li class="dropdown mr-4">
      Welcome, <?= $_SESSION['nama']; ?>
      <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></span>
      <ul class="dropdown-menu mt-2 ml-3">
        <li class="px-3 py-2">
          <a href="../../../controllers/logoutController.php" class="text-danger"><i class="fas fa-power-off mr-2"></i>Log Out</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>