<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$kurir = new Kurir;

$dataSelect = $kurir->selectKurir();
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row mx-2 mt-5 mb-3">
        <h2>Tambah Paket</h2>
      </div>
      <section class="content">
        <form action="../../../controllers/paketController.php?aksi=tambah" method="post">
          <div class="row mx-1">
            <div class="col-md-4">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Data Pengirim</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-capitalize">nama pengirim</label>
                    <input type="text" name="nama_pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis kelamin</label>
                    <select class="form-control custom-select" name="jenis_kelamin_pengirim">
                      <option selected disabled>Pilih Jenis Kelamin</option>
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">No Telp</label>
                    <input type="number" name="no_telp_pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">alamat</label>
                    <input type="text" name="alamat_pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">provinsi</label>
                    <input type="text" name="provinsi_pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kabupaten/kota</label>
                    <input type="text" name="kabupaten_pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kecamatan</label>
                    <input type="text" name="kecamatan_pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kode_pos</label>
                    <input type="number" name="kode_pos_pengirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="id_penginput" value="<?= $_SESSION['id'] ?>" class="form-control">
                    <input type="hidden" name="session_level" value="<?= $_SESSION['level'] ?>" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Data Penerima</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-capitalize">nama penerima</label>
                    <input type="text" name="nama_penerima" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis kelamin</label>
                    <select class="form-control custom-select" name="jenis_kelamin_penerima">
                      <option selected disabled>Pilih Jenis Kelamin</option>
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">No Telp</label>
                    <input type="number" name="no_telp_penerima" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">alamat</label>
                    <input type="text" name="alamat_penerima" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">provinsi</label>
                    <input type="text" name="provinsi_penerima" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kabupaten/kota</label>
                    <input type="text" name="kabupaten_penerima" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kecamatan</label>
                    <input type="text" name="kecamatan_penerima" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kode_pos</label>
                    <input type="number" name="kode_pos_penerima" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Data Paket</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-capitalize">nama paket</label>
                    <input type="text" name="nama_paket" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">berat paket</label>
                    <span class="d-flex">
                      <input type="text" name="berat_paket" id="berat_paket" class="form-control w-95 mr-3">
                      <p class="align-middle pt-1">KG</p>
                    </span>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis paket</label>
                    <select class="form-control custom-select" name="jenis_paket">
                      <option selected disabled>Pilih Jenis Paket</option>
                      <option value="normal">Normal</option>
                      <option value="fragile">Fragile</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis packing</label>
                    <select class="form-control custom-select" id="jenis_packing" name="jenis_packing">
                      <option selected disabled>Pilih Jenis Packing</option>
                      <option value="bubble wrap">Bubble Wrap</option>
                      <option value="kayu">Kayu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">layanan</label>
                    <select class="form-control custom-select" name="layanan" id="layanan">
                      <option selected disabled>Pilih Layanan</option>
                      <option value="regular">Regular (3-5 Hari)</option>
                      <option value="ekonomi">Ekonomi (5-7 Hari)</option>
                      <option value="super kilat">Super Kilat (1 Hari)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kurir</label>
                    <select class="form-control custom-select" name="kurir" id="kurir">
                      <option selected disabled>Pilih Kurir</option>
                      <?php foreach ($dataSelect as $select) { ?>
                        <option value="<?= $select['id_kurir'] ?>"><?= $select['nama_kurir'] ?> (<?= $select['jenis_kendaraan'] ?>)</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">nomor resi</label>
                    <input type="text" name="nomor_resi" class="form-control" id="nomor_resi" readonly>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">total bayar</label>
                    <input type="number" name="total_bayar" class="form-control" id="total_bayar" readonly>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="status_paket" value="belum dikirim" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="keterangan" value="-" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 px-3 py-5 d-flex justify-content-center">
              <button type="submit" class="btn btn-md btn-primary mr-2 text-capitalize">tambah data</button>
              <a href="../pages/paket.php" type="button" class="btn btn-md btn-secondary text-capitalize">batal</a>
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