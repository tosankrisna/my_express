<?php
require_once '../layout/header.php';
require_once '../../../init.php';

$paket = new Paket;
?>

<div class="banner py-5">
  <h1 class="text-white">Tracking Page</h1>
  <span class="line"></span>
</div>
</div>

<div>
  <div class="container">
    <div class="row pb-5">

      <?php if (!isset($_POST['submit'])) { ?>
        <div class="col-12 col-md-4">
          <div class="img-tracking mt-5 mb-5">
            <img src="../../../assets/img/tracking.jpg">
          </div>
        </div>

        <div class="col-12 col-md-8 d-flex flex-wrap align-content-center">
          <div class="col-12 head-title">
            <h3 class="text-center">Cari paket anda</h3>
            <p class="text-center">Masukan 11 digit nomor resi pengiriman anda pada form pencarian</p>
          </div>
          <form method="POST" action="" class="col-12 form-inline justify-content-center mt-2">
            <input class="form-control mr-sm-2 w-75" type="search" name="search_resi" placeholder="Masukan nomor resi anda...">
            <button class="btn btn-primary btn-md my-2 my-sm-0" type="submit" name="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      <?php } else { ?>
        <?php $data = $paket->trackingPaket($_POST['search_resi']); ?>

        <?php if ($data['data_one'] !== NULL and $data['data_two'] !== NULL) { ?>
          <div class="col col-12 mt-5">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Pengiriman Anda</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-4">
                    <h4>Pengirim</h4>
                    <hr>
                    <div class="post">
                      <table>
                        <tr>
                          <td class="p-2">Nama Pengirim</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['nama_pengirim'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">No Telpon</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['no_telp_pengirim'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Alamat</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['alamat_pengirim'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Kecamatan</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['kecamatan_pengirim'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Kabupaten/Kota</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['kabupaten_pengirim'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Provinsi</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['provinsi_pengirim'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Kode Pos</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['kode_pos_pengirim'] ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <h4>Penerima</h4>
                    <hr>
                    <div class="post">
                      <table>
                        <tr>
                          <td class="p-2">Nama Penerima</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_two']['nama_penerima'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">No Telpon</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_two']['no_telp_penerima'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Alamat</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_two']['alamat_penerima'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Kecamatan</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_two']['kecamatan_penerima'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Kabupaten/Kota</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_two']['kabupaten_penerima'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Provinsi</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_two']['provinsi_penerima'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Kode Pos</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_two']['kode_pos_penerima'] ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <h4>Paket</h4>
                    <hr>
                    <div class="post">
                      <table>
                        <tr>
                          <td class="p-2">Nama Paket</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['nama_paket'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Status Paket</td>
                          <td class="p-2">:</td>
                          <td class="p-2 text-capitalize"><?= $data['data_one']['status_paket'] ?></td>
                        </tr>
                        <tr>
                          <td class="p-2">Estimasi sampai</td>
                          <td class="p-2">:</td>
                          <?php if ($data['data_one']['layanan'] === 'regular') { ?>
                            <td class="p-2">3-5 Hari</td>
                          <?php } else if ($data['data_one']['layanan'] === 'ekonomi') { ?>
                            <td class="p-2">3-5 Hari</td>
                          <?php } else { ?>
                            <td class="p-2">1 Hari</td>
                          <?php } ?>
                        </tr>
                        <tr>
                          <td class="p-2">Keterangan</td>
                          <td class="p-2">:</td>
                          <td class="p-2"><?= $data['data_one']['keterangan'] ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="col col-12 mt-5">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Pengiriman Anda</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h3>Data paket tidak ditemukan!</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="row">
          <div class="col-12">
            <a href="tracking.php" class="btn btn-md btn-secondary text-capitalize">
              <i class="fas fa-arrow-left mr-2"></i>Kembali</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php
require_once '../layout/footer.php';
?>