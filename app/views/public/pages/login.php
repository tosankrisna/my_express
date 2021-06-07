<?php
require_once '../layout/top.php';
?>

<div class="login">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-12 col-md-5 padding-0">
        <div class="img-login">
          <img src="../../../assets/img/login.jpg">
        </div>
      </div>
      <div class="col-sm-12 col-md-7 login-form py-4 px-5 bg-white padding-0">
        <a href="tracking.php" class="text-sm">
          <i class="fas fa-arrow-left mb-4"></i>
          <span class="ml-1">Kembali</span>
        </a>
        <form action="../../../controllers/loginController.php" method="post" id="form">
          <div class="label-form mb-5">
            <h3>Login User</h3>
            <span class="line-label"></span>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkbox">
            <label class="form-check-label" for="checkbox">Remember me</label>
          </div>
          <button type="submit" name="submit" class="btn btn-primary w-25 rounded-pill">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
require_once '../layout/bottom.php';
?>