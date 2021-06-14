<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row mx-2 mt-5 mb-3">
        <h2>Tambah Customer Service</h2>
      </div>
      <section class="content">
        <form action="../../../controllers/CustomerServiceController.php?aksi=tambah" method="post">
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
                    <input type="text" name="nama_cs" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">username</label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis kelamin</label>
                    <select class="form-control custom-select" name="jenis_kelamin">
                      <option selected disabled>Pilih Jenis Kelamin</option>
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">No Telp</label>
                    <input type="number" name="no_telp" class="form-control">
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
                    <input type="text" name="alamat" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">provinsi</label>
                    <input type="text" name="provinsi" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kabupaten/kota</label>
                    <input type="text" name="kabupaten" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kode_pos</label>
                    <input type="number" name="kode_pos" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 px-3 py-5 d-flex justify-content-center">
              <button type="submit" class="btn btn-md btn-primary mr-2 text-capitalize">tambah data</button>
              <a href="../pages/customerService.php" class="btn btn-md btn-secondary text-capitalize">batal</a>
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