<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$cs = new CustomerService;
$results = $cs->viewCustomerService();

if (isset($_POST['submit'])) {
  $results = $cs->searchCustomerService($_POST['search']);
}
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row px-2 pt-4 d-flex justify-content-center justify-content-md-start">
        <h2 class="header-cs">Data Customer Service</h2>
      </div>
      <div class="row px-2 bg-white">
        <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
          <a href="../components/formTambahCs.php" class="btn btn-sm btn-primary mt-2 mr-1 px-3 rounded-pill">
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php if ($results) { ?>
                    <?php foreach ($results as $result) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td class="text-capitalize"><?= $result['nama_cs'] ?></td>
                        <td><?= $result['email'] ?></td>
                        <td class="text-capitalize"><?= $result['jenis_kelamin'] ?></td>
                        <td><?= $result['no_telp'] ?></td>
                        <td>
                          <a href="../components/cardDetailCs.php?id=<?= $result['id_cs'] ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-info-circle mr-1"></i>Detail
                          </a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach ?>
                  <?php } else { ?>
                    <tr>
                      <td colspan="6" class="text-center p-5">
                        <h4>Tidak ada data customer service!</h4>
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