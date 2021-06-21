<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$paket = new Paket;
$id = $_GET['id'];
$data = $paket->detailUpdateTracking($id);
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row mx-2 mt-5 mb-3">
        <h2>Update Tracking</h2>
      </div>
      <section class="content">
        <form action="../../../controllers/paketController.php?aksi=update_tracking&id_tracking=<?= $data['id_tracking'] ?>" method="post">
          <div class="row mx-1">
            <div class="col-12 col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"></h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputStatus">Status Paket</label>
                    <select id="inputStatus" name="status_paket" class="form-control custom-select">
                      <?php if ($data['status_paket'] === 'sedang dikirim') { ?>
                        <option value="sedang dikirim" selected>Sedang Dikirim</option>
                        <option value="selesai dikirim">Selesai Dikirim</option>
                        <option value="gagal dikirim">Gagal Dikirim</option>
                      <?php } else if ($data['status_paket'] === 'selesai dikirim') { ?>
                        <option value="sedang dikirim">Sedang Dikirim</option>
                        <option value="selesai dikirim" selected>Selesai Dikirim</option>
                        <option value="gagal dikirim">Gagal Dikirim</option>
                      <?php } else { ?>
                        <option value="sedang dikirim">Sedang Dikirim</option>
                        <option value="selesai dikirim">Selesai Dikirim</option>
                        <option value="gagal dikirim" selected>Gagal Dikirim</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Keterangan</label>
                    <textarea id="inputDescription" class="form-control" name="keterangan" rows="4"><?= $data['keterangan'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="tgl_kirim" value="<?= $data['tgl_kirim'] ?>">
                    <input type="text" name="estimasi" value="<?= $paket->estimasiSampai($data['layanan'], $data['tgl_kirim']) ?>">
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 px-3 py-5 d-flex justify-content-center">
              <button type="submit" class="btn btn-md btn-primary mr-2 text-capitalize">Update Tracking</button>
              <a href="#" class="btn btn-md btn-secondary text-capitalize">batal</a>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>