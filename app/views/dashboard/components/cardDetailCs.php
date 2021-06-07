<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$cs = new CustomerService;
$id = $_GET['id'];
$data = $cs->detailCustomerService($id);
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row mx-2 mt-5 mb-3">
        <h2>Detail Customer Service</h2>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-6">
            <h4>Data Customer Service</h4>
            <hr>
            <div class="post">
              <table>
                <tr>
                  <td class="p-2">Nama</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['nama_cs'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Email</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['email'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Username</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['username'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Jenis Kelamin</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">No Telp</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['no_telp'] ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h4>Data Alamat</h4>
            <hr>
            <div class="post">
              <table>
                <tr>
                  <td class="p-2">Alamat</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['alamat'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Provinsi</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['provinsi'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kabupaten/Kota</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['kabupaten'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kecamatan</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['kecamatan'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kode Pos</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['kode_pos'] ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="text-center mt-5 mb-3">
          <a href="formEditCs.php?id=<?= $data['id_cs'] ?>" class="btn btn-md btn-warning text-white mr-2">
            <i class="fas fa-pen mr-1"></i>Edit
          </a>
          <a onclick="confirmDeleteCs(<?= $data['id_cs'] ?>, <?= $data['id_alamat'] ?>)" class="btn btn-md btn-danger">
            <i class="fas fa-trash mr-1"></i>Hapus
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once '../layout/bottom.php';
?>