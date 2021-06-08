<?php
require_once '../layout/top.php';
?>

<div class="login-box login-page w-100">
  <div class="login-logo">
    <a href="#"><b>Lupa password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card w-35">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masukan username dan password baru anda</p>

      <form action="../../../controllers/loginController.php?aksi=lupa_password" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row mt-5 mb-4">
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Ubah password</button>
          </div>
          <div class="col-6">
            <a href="login.php" class="btn btn-secondary btn-block">Batal</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<?php
require_once '../layout/bottom.php';
?>