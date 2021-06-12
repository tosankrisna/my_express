<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$paket = new Paket;
$results = $paket->viewPaket();

if (isset($_POST['submit'])) {
  $results = $cs->searchCustomerService($_POST['search']);
}
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row px-2 pt-4 d-flex justify-content-center justify-content-md-start">
        <h2 class="header">Data Paket</h2>
      </div>
      <div class="row px-2 bg-white">
        <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
          <a href="../components/formTambahPaket.php" class="btn btn-sm btn-primary mt-2 mr-1 px-3 rounded-pill">
            <span class="text-white">
              <i class="fas fa-user-circle mr-1"></i>
              Tambah Data
            </span>
          </a>
          <a href="#" class="btn btn-sm btn-warning mt-2 px-3 rounded-pill">
            <span class="text-white">
              <i class="fas fa-print mr-1"></i>
              Cetak Data
            </span>
          </a>
        </div>
        <div class="col-12 col-md-6">
          <form action="" method="post" class="form-inline d-flex justify-content-center justify-content-md-end">
            <input class="form-control mr-sm-2 w-50" type="search" name="search" placeholder="Masukan Customer Service" aria-label="Search">
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
                    <th>Nama Paket</th>
                    <th>Nomor Resi</th>
                    <th>Status Paket</th>
                    <th>Nama Pengirim</th>
                    <th>Nama Penerima</th>
                    <th>Nama Kurir</th>
                    <th>Total Bayar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php if ($results) { ?>
                    <?php foreach ($results as $result) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td class="text-capitalize"><?= $result['nama_paket'] ?></td>
                        <td><?= $result['no_resi'] ?></td>
                        <td class="text-capitalize">
                          <?php if ($result['status_paket'] === 'belum dikirim') { ?>
                            <span class="badge badge-secondary p-2">
                            <?php } else if ($result['status_paket'] === 'sedang dikirim') { ?>
                              <span class="badge badge-warning p-2">
                              <?php } else if ($result['status_paket'] === 'selesai dikirim') { ?>
                                <span class="badge badge-success p-2">
                                <?php } else { ?>
                                  <span class="badge badge-danger p-2">
                                  <?php } ?>
                                  <?= $result['status_paket'] ?>
                                  </span>
                        </td>
                        <td class="text-capitalize"><?= $result['nama_pengirim'] ?></td>
                        <td class="text-capitalize"><?= $result['nama_penerima'] ?></td>
                        <td class="text-capitalize"><?= $result['nama_kurir'] ?></td>
                        <td class="text-capitalize">Rp.<?= $result['total_bayar'] ?></td>
                        <td>
                          <a href="../components/cardDetailPaket.php?id=<?= $result['id_paket'] ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-info-circle mr-1"></i>Detail
                          </a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach ?>
                  <?php } else { ?>
                    <tr>
                      <td colspan="6" class="text-center p-5">
                        <h4>Tidak ada data paket!</h4>
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