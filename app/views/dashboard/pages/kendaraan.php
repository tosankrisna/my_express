<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$kendaraan = new Kendaraan;
$results = $kendaraan->viewKendaraan();

if (isset($_POST['submit'])) {
  $results = $kendaraan->searchKendaraan($_POST['search']);
}
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row px-2 pt-4">
        <h2>Data Kendaraan</h2>
      </div>
      <div class="row px-2 bg-white">
        <div class="col-12">
          <form action="" method="post" class="form-inline d-flex justify-content-end">
            <input class="form-control mr-sm-2 w-25" type="search" name="search" placeholder="Masukan Nama Kurir atau Plat Nomor" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Plat Nomor</th>
                    <th>Nama Kurir</th>
                    <th>No Telp</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php if ($results) { ?>
                    <?php foreach ($results as $result) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td class="text-capitalize"><?= $result['nama_kendaraan'] ?></td>
                        <td class="text-capitalize"><?= $result['jenis_kendaraan'] ?></td>
                        <td class="text-uppercase"><?= $result['plat_nomor'] ?></td>
                        <td class="text-capitalize"><?= $result['nama_kurir'] ?></td>
                        <td><?= $result['no_telp'] ?></td>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach ?>
                  <?php } else { ?>
                    <tr>
                      <td colspan="6" class="text-center p-5">
                        <h4>Tidak ada data kendaraan!</h4>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once '../layout/bottom.php';
?>