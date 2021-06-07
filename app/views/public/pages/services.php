<?php
require_once '../layout/header.php';
?>

<div class="banner py-5">
  <h1 class="text-white">Services Page</h1>
  <span class="line"></span>
</div>
</div>

<div>
  <div class="container">
    <div class="row mt-5 mx-auto">
      <div class="col-12">
        <h2 class="mb-3 text-center">Apa saja layanan kami?</h2>
        <hr class="bg-secondary about-hr m-auto">
      </div>
    </div>
    <div class="row mt-5 pb-5 mx-auto">
      <div class="col-12 col-md-6 col-lg-4 mb-2">
        <div class="card" style="min-height: 25rem">
          <img src="../../../assets/img/reguler.jpg" style="min-height: 245px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold mb-4">Layanan Reguler</h5>
            <p class="card-text">
              <i class="fas fa-clock"></i>
              <span>Estimasi : 3-5 hari</span>
            </p>
            <p class="card-text">
              <i class="fas fa-globe"></i>
              <span>Area : seluruh Indonesia</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-2">
        <div class="card" style="min-height: 25rem">
          <img src="../../../assets/img/ekonomi.jpg" class="card-img-top" style="min-height: 200px" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold mb-4">Layanan Ekonomi</h5>
            <p class="card-text">
              <i class="fas fa-clock"></i>
              <span>Estimasi : 5-7 hari</span>
            </p>
            <p class="card-text">
              <i class="fas fa-globe"></i>
              <span>Area : seluruh Indonesia</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card" style="min-height: 25rem">
          <img src="../../../assets/img/kilat.jpeg" class="card-img-top" style="min-height: 200px" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold mb-4">Layanan Super Kilat</h5>
            <p class="card-text">
              <i class="fas fa-clock"></i>
              <span>Estimasi : 1 hari</span>
            </p>
            <p class="card-text">
              <i class="fas fa-globe"></i>
              <span>Area : seluruh Indonesia</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once '../layout/footer.php';
?>