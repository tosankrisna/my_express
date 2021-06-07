<?php
require_once '../layout/header.php';
?>

<div class="banner py-5">
  <h1 class="text-white">Tracking Page</h1>
  <span class="line"></span>
</div>
</div>

<div>
  <div class="container">
    <div class="row pb-5">
      <div class="col-12 col-md-4">
        <div class="img-tracking mt-5 mb-5">
          <img src="../../../assets/img/tracking.jpg">
        </div>
      </div>
      <div class="col-12 col-md-8 d-flex flex-wrap align-content-center">
        <div class="col-12 head-title">
          <h3 class="text-center">Cari paket anda</h3>
          <p class="text-center">Masukan 10 digit nomor resi pengiriman anda pada form pencarian</p>
        </div>
        <form class="col-12 form-inline justify-content-center mt-2">
          <input class="form-control mr-sm-2 w-75" type="search" placeholder="Masukan nomor resi anda...">
          <button class="btn btn-primary btn-md my-2 my-sm-0" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
require_once '../layout/footer.php';
?>