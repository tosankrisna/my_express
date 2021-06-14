<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$paket = new Paket;
$kurir = new Kurir;
$id = $_GET['id'];

$data = $paket->detailPaket($id);
$dataSelect = $kurir->selectKurir();
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row mx-2 mt-5 mb-3">
        <h2>Edit Paket</h2>
      </div>
      <section class="content">
        <form action="../../../controllers/paketController.php?aksi=edit" method="post">
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
                    <input type="text" name="nama_pengirim" value="<?= $data['data_one']['nama_pengirim'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis kelamin</label>
                    <select class="form-control custom-select" name="jenis_kelamin_pengirim">
                      <?php if ($data['data_one']['jenis_kelamin_pengirim'] === 'laki-laki') { ?>
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
                    <input type="number" name="no_telp_pengirim" value="<?= $data['data_one']['no_telp_pengirim'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">alamat</label>
                    <input type="text" name="alamat_pengirim" value="<?= $data['data_one']['alamat_pengirim'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">provinsi</label>
                    <input type="text" name="provinsi_pengirim" value="<?= $data['data_one']['provinsi_pengirim'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kabupaten/kota</label>
                    <input type="text" name="kabupaten_pengirim" value="<?= $data['data_one']['kabupaten_pengirim'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kecamatan</label>
                    <input type="text" name="kecamatan_pengirim" value="<?= $data['data_one']['kecamatan_pengirim'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kode_pos</label>
                    <input type="number" name="kode_pos_pengirim" value="<?= $data['data_one']['kode_pos_pengirim'] ?>" class="form-control">
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
                    <input type="text" name="nama_penerima" value="<?= $data['data_two']['nama_penerima'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis kelamin</label>
                    <select class="form-control custom-select" name="jenis_kelamin_penerima">
                      <?php if ($data['data_two']['jenis_kelamin_penerima'] === 'laki-laki') { ?>
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
                    <input type="number" name="no_telp_penerima" value="<?= $data['data_two']['no_telp_penerima'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">alamat</label>
                    <input type="text" name="alamat_penerima" value="<?= $data['data_two']['alamat_penerima'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">provinsi</label>
                    <input type="text" name="provinsi_penerima" value="<?= $data['data_two']['provinsi_penerima'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kabupaten/kota</label>
                    <input type="text" name="kabupaten_penerima" value="<?= $data['data_two']['kabupaten_penerima'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kecamatan</label>
                    <input type="text" name="kecamatan_penerima" value="<?= $data['data_two']['kecamatan_penerima'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kode_pos</label>
                    <input type="number" name="kode_pos_penerima" value="<?= $data['data_two']['kode_pos_penerima'] ?>" class="form-control">
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
                    <input type="text" name="nama_paket" value="<?= $data['data_one']['nama_paket'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">berat paket</label>
                    <span class="d-flex">
                      <input type="text" name="berat_paket" value="<?= $data['data_one']['berat_paket'] ?>" id="berat_paket" class="form-control w-95 mr-3">
                      <p class="align-middle pt-1">KG</p>
                    </span>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis paket</label>
                    <select class="form-control custom-select" name="jenis_paket">
                      <?php if ($data['data_one']['jenis_paket'] === 'normal') { ?>
                        <option value="normal" selected>Normal</option>
                        <option value="fragile">Fragile</option>
                      <?php } else { ?>
                        <option value="normal">Normal</option>
                        <option value="fragile" selected>Fragile</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">jenis packing</label>
                    <select class="form-control custom-select" id="jenis_packing" name="jenis_packing">
                      <?php if ($data['data_one']['jenis_packing'] === 'bubble wrap') { ?>
                        <option value="bubble wrap" selected>Bubble Wrap</option>
                        <option value="kayu">Kayu</option>
                      <?php } else { ?>
                        <option value="bubble wrap">Bubble Wrap</option>
                        <option value="kayu" selected>Kayu</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">layanan</label>
                    <select class="form-control custom-select" name="layanan" id="layanan">
                      <?php if ($data['data_one']['layanan'] === 'regular') { ?>
                        <option value="regular" selected>Regular (3-5 Hari)</option>
                        <option value="ekonomi">Ekonomi (5-7 Hari)</option>
                        <option value="super kilat">Super Kilat (1 Hari)</option>
                      <?php } else if ($data['data_one']['layanan'] === 'ekonomi') { ?>
                        <option value="regular">Regular (3-5 Hari)</option>
                        <option value="ekonomi" selected>Ekonomi (5-7 Hari)</option>
                        <option value="super kilat">Super Kilat (1 Hari)</option>
                      <?php } else { ?>
                        <option value="regular">Regular (3-5 Hari)</option>
                        <option value="ekonomi">Ekonomi (5-7 Hari)</option>
                        <option value="super kilat" selected>Super Kilat (1 Hari)</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">kurir</label>
                    <select class="form-control custom-select" name="kurir">
                      <?php foreach ($dataSelect as $select) { ?>
                        <?php if ($select['nama_kurir'] === $data['data_one']['nama_kurir']) { ?>
                          <option value="<?= $select['id_kurir'] ?>" selected><?= $select['nama_kurir'] ?> (<?= $select['jenis_kendaraan'] ?>)</option>
                        <?php } else if ($select['nama_kurir'] !== $data['data_one']['nama_kurir']) { ?>
                          <option value="<?= $select['id_kurir'] ?>"><?= $select['nama_kurir'] ?> (<?= $select['jenis_kendaraan'] ?>)</option>
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">nomor resi</label>
                    <input type="text" name="nomor_resi" class="form-control" value="<?= $data['data_one']['no_resi'] ?>" id="nomor_resi" readonly>
                  </div>
                  <div class="form-group">
                    <label class="text-capitalize">total bayar</label>
                    <input type="number" name="total_bayar" value="<?= $data['data_one']['total_bayar'] ?>" class="form-control" id="total_bayar" readonly>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="status_paket" value="<?= $data['data_one']['status_paket'] ?>" class=" form-control">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="keterangan" value="<?= $data['data_one']['keterangan'] ?>" class=" form-control">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="id_alamat_pengirim" value="<?= $data['data_one']['id_alamat_pengirim'] ?>" class=" form-control">
                    <input type="hidden" name="id_pengirim" value="<?= $data['data_one']['id_pengirim'] ?>" class=" form-control">
                    <input type="hidden" name="id_alamat_penerima" value="<?= $data['data_two']['id_alamat_penerima'] ?>" class=" form-control">
                    <input type="hidden" name="id_penerima" value="<?= $data['data_two']['id_penerima'] ?>" class=" form-control">
                    <input type="hidden" name="id_paket" value="<?= $data['data_one']['id_paket'] ?>" class=" form-control">
                    <input type="hidden" name="id_tracking" value="<?= $data['data_one']['id_tracking'] ?>" class=" form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 px-3 py-3 d-flex justify-content-center">
              <button type="submit" class="btn btn-md btn-primary mr-2 text-capitalize">edit data</button>
              <button type="button" class="btn btn-md btn-secondary text-capitalize">batal</button>
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