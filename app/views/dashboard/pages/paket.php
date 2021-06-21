<?php
error_reporting(0);

require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$paket = new Paket;

if ($_SESSION['level'] === 'admin' or $_SESSION['level'] === 'customer service') {
  $results = $paket->viewPaket();
} else {
  $results = $paket->viewPaketKurir($_SESSION['id']);
}

if (isset($_POST['cari'])) {
  if ($_SESSION['level'] === 'admin' or $_SESSION['level'] === 'customer service') {
    $results = $paket->searchPaket($_POST['search']);
  } else if ($_SESSION['level'] === 'kurir') {
    $results = $paket->searchPaketKurir($_SESSION['id'], $_POST['search']);
  }
}

if (isset($_POST['filter'])) {
  $results = $paket->filterPaket($_POST['filterCount'], $_POST['filterName']);
  //   var_dump($results['res']);
  //   die();
}
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row px-2 pt-4 d-flex justify-content-center justify-content-md-start">
        <h2 class="header">Data Paket</h2>
      </div>

      <div class="row px-2 bg-white">
        <?php if ($_SESSION['level'] === 'admin' or $_SESSION['level'] === 'customer service') { ?>
          <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start">
            <a href="../components/formTambahPaket.php" class="btn btn-sm btn-primary mt-2 mr-1 px-3 rounded-pill">
              <span class="text-white">
                <i class="fas fa-user-circle mr-1"></i>
                Tambah Data
              </span>
            </a>
            <!-- <a href="#" class="btn btn-sm btn-warning mt-2 px-3 rounded-pill">
              <span class="text-white">
                <i class="fas fa-print mr-1"></i>
                Cetak Data
              </span>
            </a> -->
          </div>
          <div class="col-12 col-md-7">
            <form action="" method="post" class="form-inline d-flex justify-content-center justify-content-md-end">
              <input class="form-control mr-sm-2 w-50" type="search" name="search" placeholder="Masukan No Resi, No Pengiriman, atau Status" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <div class="col-12 col-md-1 d-flex align-items-center">
            <button class="btn btn-sm btn-primary py-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-filter"></i>
              Filter
            </button>

            <div class="dropdown-menu filter-menu" aria-labelledby="dropdownMenuLink">
              <div class="row">
                <div class="col">
                  <label class="ml-3">Filter menurut:</label>
                </div>
              </div>
              <form action="" method="post">
                <div class="row">
                  <div class="col ml-3 mr-3">
                    <select name="filterCount" id="" class="form-control custom-select">
                      <option value="terbanyak">Terbanyak</option>
                      <option value="tersedikit">Tersedikit</option>
                    </select>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col ml-3 mr-3">
                    <select name="filterName" id="" class="form-control custom-select">
                      <option value="alamat">Alamat</option>
                      <option value="pengirim">Pengirim</option>
                      <option value="penerima">Penerima</option>
                    </select>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-sm btn-primary ml-3" name="filter">Apply Filter</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <?php } else { ?>
          <div class="col-12 col-md-6 offset-6">
            <form action="" method="post" class="form-inline d-flex justify-content-center justify-content-md-end">
              <input class="form-control mr-sm-2 w-50" type="search" name="search" placeholder="Masukan No Resi, No Pengiriman, atau Status" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="cari"><i class="fas fa-search"></i></button>
            </form>
          </div>
        <?php } ?>
      </div>

      <?php if (!isset($_POST['filter'])) { ?>
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
                      <th>Nomor Pengiriman</th>
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
                          <td><?= $result['no_pengiriman'] ?></td>
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
                            <?php if ($_SESSION['level'] === 'kurir' && $result['status_paket'] === 'belum dikirim') { ?>
                              <a href="../../../controllers/paketController.php?aksi=proses&id_tracking=<?= $result['id_tracking'] ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-check mr-1"></i>Proses
                              </a>
                            <?php } else { ?>
                              <a href="../components/cardDetailPaket.php?id=<?= $result['id_paket'] ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-info-circle mr-1"></i>Detail
                              </a>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php $i++; ?>
                      <?php endforeach ?>
                    <?php } else { ?>
                      <tr>
                        <td colspan="9" class="text-center p-5">
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
      <?php } else if (isset($_POST['filter'])) { ?>

        <div class="row">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <?php foreach ($results['menu'] as $menu) : ?>
                        <th><?= $menu ?></th>
                      <?php endforeach ?>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $i = 1; ?>
                    <?php if ($results) { ?>
                      <?php foreach ($results['res'] as $result) : ?>
                        <tr>
                          <td><?= $i; ?></td>
                          <?php if ($result['nama_pengirim'] !== NULL) { ?>
                            <td class="text-capitalize"><?= $result['nama_pengirim'] ?></td>
                          <?php } ?>
                          <?php if ($result['nama_penerima'] !== NULL) { ?>
                            <td class="text-capitalize"><?= $result['nama_penerima'] ?></td>
                          <?php } ?>
                          <td class="text-capitalize"><?= $result['alamat'] . ', ' . $result['kabupaten'] ?></td>
                          <td class="text-capitalize"><?= $result['counts'] ?></td>
                          <?php if ($result['total_bayar'] !== NULL) { ?>
                            <td class="text-capitalize">Rp. <?= $result['total_bayar'] ?></td>
                          <?php } ?>
                        </tr>
                        <?php $i++; ?>
                      <?php endforeach ?>
                    <?php } else { ?>
                      <tr>
                        <td colspan="9" class="text-center p-5">
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

      <?php } ?>
    </div>
  </div>
</div>

<?php
require_once '../layout/bottom.php';
?>