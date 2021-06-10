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
                    <th>Biaya Kirim</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Kacamata Hitam</td>
                    <td>1234567890</td>
                    <td><span class="badge badge-secondary p-2">Belum Dikirim</span></td>
                    <td>Katchaa Supply</td>
                    <td>Adi Arifin</td>
                    <td>Dede Andika</td>
                    <td>Rp. 125.000</td>
                    <td>
                      <a href="../components/cardDetailKurir.php?id=<?= $result['id_kurir'] ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-info-circle mr-1"></i>Detail
                      </a>
                    </td>
                  </tr>
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