<?php
require_once 'top.php';
?>

<div class="app pt-2 pt-md-4">
  <nav class="navbar navbar-expand-lg navbar-light bg-white w-75 rounded m-auto">
    <div class="container">
      <a class="navbar-brand" href="#">My Express</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse py-3" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3">
            <a class="nav-link text-dark" href="../pages/tracking.php">Tracking</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-dark" href="../pages/services.php">Services</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-dark" href="../pages/aboutUs.php">About Us</a>
          </li>
          <li class="nav-item">
            <a href="../pages/login.php" class="btn btn-sm btn-primary mt-2 px-3 rounded-pill">
              <span>
                <i class="fas fa-user-circle"></i>
                Login
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>