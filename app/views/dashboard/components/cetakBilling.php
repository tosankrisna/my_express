<?php
require_once '../layout/top.php';
require_once '../../../init.php';

$paket = new Paket;
$id = $_GET['id'];
$data = $paket->detailPaket($id);
?>

<div class="container cetak-billing">
  <div class="border border-dark">

    <div class="row">
      <div class="col text-center">
        <h2 class="navbar-brand" style="font-size: 2em;" href="#">My Express</h2>
        <hr class="bg-dark" style="margin-top: -5px;">
        <h6>Nomor Resi</h6>
        <h4><?= $data['data_one']['no_resi'] ?></h4>
      </div>
    </div>
    <div class="row mt-4 p-4">
      <div class="col">
        <h4 class="p-2">Pengirim</h4>
        <table>
          <tr>
            <td class="p-2">Nama</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['nama_pengirim'] ?></td>
          </tr>
          <tr>
            <td class="p-2">No Telp</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['no_telp_pengirim'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Alamat</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['alamat_pengirim'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Kecamatan</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['kecamatan_pengirim'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Kabupaten</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['kabupaten_pengirim'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Provinsi</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['provinsi_pengirim'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Kode Pos</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['kode_pos_pengirim'] ?></td>
          </tr>
        </table>
      </div>
      <div class="col">
        <h4 class="p-2">Penerima</h4>
        <table>
          <tr>
            <td class="p-2">Nama</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_two']['nama_penerima'] ?></td>
          </tr>
          <tr>
            <td class="p-2">No Telp</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_two']['no_telp_penerima'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Alamat</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_two']['alamat_penerima'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Kecamatan</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_two']['kecamatan_penerima'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Kabupaten</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_two']['kabupaten_penerima'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Provinsi</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_two']['provinsi_penerima'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Kode Pos</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_two']['kode_pos_penerima'] ?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row mt-5 p-4">
      <div class="col">
        <h4 class="p-2">Paket</h4>
        <table>
          <tr>
            <td class="p-2">Nama Paket</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['nama_paket'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Layanan</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['layanan'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Berat Paket</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['berat_paket'] ?> Kg</td>
          </tr>
          <tr>
            <td class="p-2">Jenis Paket</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['jenis_paket'] ?></td>
          </tr>
          <tr>
            <td class="p-2">Jenis Packing</td>
            <td class="p-2">:</td>
            <td class="p-2 text-bold text-capitalize"><?= $data['data_one']['jenis_packing'] ?></td>
          </tr>
        </table>
      </div>
      <div class="col">
        <h4>Total Bayar</h4>
        <h2>Rp. <?= $data['data_one']['total_bayar'] ?></h2>
      </div>
    </div>
  </div>
</div>

<script>
  window.print();

  window.setTimeout(function() {
    window.history.back(-1);
  }, 3000)
</script>

<?php
require_once '../layout/bottom.php';
?>