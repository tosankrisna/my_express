<?php
require_once '../layout/navbar.php';
require_once '../layout/sidebar.php';
require_once '../../../init.php';

$paket = new Paket;
$id = $_GET['id'];
$data = $paket->detailPaket($id);
?>

<div class="content-wrapper bg-white">
  <div class="content">
    <div class="container-fluid">
      <div class="row mx-2 mt-5 mb-3">
        <h2>Detail Paket</h2>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-3">
            <h4>Data Pengirim</h4>
            <hr>
            <div class="post">
              <table>
                <tr>
                  <td class="p-2">Nama Pengirim</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['nama_pengirim'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Jenis Kelamin</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['jenis_kelamin_pengirim'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">No Telpon</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['no_telp_pengirim'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Alamat</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['alamat_pengirim'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kecamatan</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['kecamatan_pengirim'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kabupaten/Kota</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['kabupaten_pengirim'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Provinsi</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['provinsi_pengirim'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kode Pos</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['kode_pos_pengirim'] ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <h4>Data Penerima</h4>
            <hr>
            <div class="post">
              <table>
                <tr>
                  <td class="p-2">Nama Penerima</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_two']['nama_penerima'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Jenis Kelamin</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_two']['jenis_kelamin_penerima'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">No Telpon</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_two']['no_telp_penerima'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Alamat</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_two']['alamat_penerima'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kecamatan</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_two']['kecamatan_penerima'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kabupaten</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_two']['kabupaten_penerima'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Provinsi</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_two']['provinsi_penerima'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Kode Pos</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_two']['kode_pos_penerima'] ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <h4>Data Paket</h4>
            <hr>
            <div class="post">
              <table>
                <tr>
                  <td class="p-2">Nama Paket</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['nama_paket'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Berat Paket</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['berat_paket'] ?> Kg</td>
                </tr>
                <tr>
                  <td class="p-2">Jenis Paket</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['jenis_paket'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Jenis Packing</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['jenis_packing'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Layanan</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['layanan'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Total Bayar</td>
                  <td class="p-2">:</td>
                  <td class="p-2">Rp.<?= $data['data_one']['total_bayar'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Status Paket</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['status_paket'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Keterangan</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['keterangan'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">No Resi</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['no_resi'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">No Pengiriman</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['no_pengiriman'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Tgl Kirim</td>
                  <td class="p-2">:</td>
                  <td class="p-2">
                    <?php if ($data['data_one']['tgl_kirim'] !== NULL) { ?>
                      <?= $data['data_one']['tgl_kirim'] ?>
                    <?php } else { ?>
                      -
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td class="p-2">Tgl Terima</td>
                  <td class="p-2">:</td>
                  <td class="p-2">
                    <?php if ($data['data_one']['tgl_terima'] !== NULL) { ?>
                      <?= $data['data_one']['tgl_terima'] ?>
                    <?php } else { ?>
                      -
                    <?php } ?>
                  </td>
                </tr>
                <?php if ($data['data_one']['tgl_kirim'] !== NULL) { ?>
                  <tr>
                    <td class="p-2">Estimasi Sampai</td>
                    <td class="p-2">:</td>
                    <td class="p-2">
                      <?= $paket->estimasiSampai($data['data_one']['layanan'], $data['data_one']['tgl_kirim']) ?>
                    </td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <h4>Data Kurir</h4>
            <hr>
            <div class="post">
              <table>
                <tr>
                  <td class="p-2">Nama Kurir</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['nama_kurir'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Jenis Kelamin</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['jenis_kelamin_kurir'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">No Telpon</td>
                  <td class="p-2">:</td>
                  <td class="p-2"><?= $data['data_one']['no_telp_kurir'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Nama Kendaraan</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['nama_kendaraan'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Jenis Kendaraan</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-capitalize"><?= $data['data_one']['jenis_kendaraan'] ?></td>
                </tr>
                <tr>
                  <td class="p-2">Plat Nomor</td>
                  <td class="p-2">:</td>
                  <td class="p-2 text-uppercase"><?= $data['data_one']['plat_nomor'] ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="text-center mt-5 mb-3">
          <?php if ($_SESSION['level'] === 'kurir' && $data['data_one']['status_paket'] !== 'selesai dikirim' && $data['data_one']['status_paket'] !== 'terlambat dikirim') { ?>
            <a href="formUpdateTracking.php?id=<?= $data['data_one']['id_tracking'] ?>" class="btn btn-md btn-secondary text-white mr-2">
              <i class="fas fa-pen mr-1"></i>Update Tracking
            </a>
          <?php } else if ($_SESSION['level'] === 'admin') { ?>
            <a href="cetakBilling.php?id=<?= $data['data_one']['id_paket'] ?>" class="btn btn-md btn-primary text-white mr-2">
              <i class="fas fa-print mr-1"></i>Cetak Billing
            </a>
            <?php if ($data['data_one']['status_paket'] === 'belum dikirim') { ?>
              <a href="formEditPaket.php?id=<?= $data['data_one']['id_paket'] ?>" class="btn btn-md btn-warning text-white mr-2">
                <i class="fas fa-pen mr-1"></i>Edit
              </a>
              <a onclick="confirmDeletePaket(<?= $data['data_one']['id_paket'] ?>, <?= $data['data_one']['id_alamat_pengirim'] ?>, <?= $data['data_one']['id_pengirim'] ?>, <?= $data['data_two']['id_penerima'] ?>, <?= $data['data_two']['id_alamat_penerima'] ?>, <?= $data['data_one']['id_tracking'] ?>)" class="btn btn-md btn-danger">
                <i class="fas fa-trash mr-1"></i>Hapus
              </a>
            <?php } ?>
          <?php } else if ($_SESSION['level'] === 'customer service') { ?>
            <a href="formEditPaket.php?id=<?= $data['data_one']['id_paket'] ?>" class="btn btn-md btn-primary text-white mr-2">
              <i class="fas fa-print mr-1"></i>Cetak Billing
            </a>
            <?php if ($data['data_one']['status_paket'] === 'belum dikirim') { ?>
              <a href="formEditPaket.php?id=<?= $data['data_one']['id_paket'] ?>" class="btn btn-md btn-warning text-white mr-2">
                <i class="fas fa-pen mr-1"></i>Edit
              </a>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once '../layout/bottom.php';
?>