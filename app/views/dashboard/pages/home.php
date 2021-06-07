<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$cs = new CustomerService;
$kurir = new Kurir;
$kendaraan = new Kendaraan;

$total_cs = $cs->getTotal();
$total_kurir = $kurir->getTotal();
$total_kendaraan = $kendaraan->getTotal();
?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row mt-3 bg-white">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Paket</p>
            </div>
            <div class="icon">
              <i class="fas fa-box"></i>
            </div>
            <div class="small-box-footer" style="height: 30px;"></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= $total_cs; ?></h3>

              <p>Customer Service</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <div class="small-box-footer" style="height: 30px;"></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner text-white">
              <h3><?= $total_kurir; ?></h3>

              <p>Kurir</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <div class="small-box-footer" style="height: 30px;"></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $total_kurir; ?></h3>

              <p>Kendaraan</p>
            </div>
            <div class="icon">
              <i class="fas fa-truck"></i>
            </div>
            <div class="small-box-footer" style="height: 30px;"></div>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php
require_once '../layout/bottom.php';
?>