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
        <h2>Edit Customer Service</h2>
      </div>
      <section class="content">
        <form action="../../../controllers/CustomerServiceController.php?aksi=edit&id_cs=<?= $data['id_cs'] ?>&id_alamat=<?= $data['id_alamat'] ?>" method="post">
          <div class="row mx-1">
            <div class="col-md-6">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Data Customer Service</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-capitalize">nama</label>
                    <input type="text" name="nama_cs" value="<?= $data['nama_cs'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">email</label>
                    <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">username</label>
                    <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="password" value="<?= $data['password'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis kelamin</label>
                    <select class="form-control custom-select" name="jenis_kelamin">
                      <?php if ($data['jenis_kelamin'] === 'laki-laki') { ?>
                        <option value="laki-laki" selected>Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                      <?php } else { ?>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan" selected>Perempuan</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">No Telp</label>
                    <input type="number" name="no_telp" value="<?= $data['no_telp'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="id_admin" value="<?= $_SESSION['id'] ?>" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Data Alamat</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-capitalize">alamat</label>
                    <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">provinsi</label>
                    <input type="text" name="provinsi" value="<?= $data['provinsi'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kabupaten/kota</label>
                    <input type="text" name="kabupaten" value="<?= $data['kabupaten'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kecamatan</label>
                    <input type="text" name="kecamatan" value="<?= $data['kecamatan'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kode_pos</label>
                    <input type="number" name="kode_pos" value="<?= $data['kode_pos'] ?>" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 px-3 py-5 d-flex justify-content-center">
              <button type="submit" class="btn btn-md btn-primary mr-2 text-capitalize">edit data</button>
              <a href="cardDetailCs.php?id=<?= $data['id_cs'] ?>" class="btn btn-md btn-secondary text-capitalize">batal</a>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>

<?php
require_once '../layout/bottom.php';
?>