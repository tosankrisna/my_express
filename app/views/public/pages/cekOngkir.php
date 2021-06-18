<?php
require_once '../layout/header.php';
?>

<div class="banner py-5">
  <h1 class="text-white">Cek Ongkir Page</h1>
  <span class="line"></span>
</div>
</div>

<div>
  <div class="container">
    <div class="row p-5">
      <div class="col-12 text-center">
        <h2 class="mb-3">Cek Ongkir Paket Anda</h2>
        <hr class="bg-secondary about-hr m-auto">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="basic-url">Kota Asal</label>
        <div class="input-group mb-3">
          <input type="text" name="kota_asal" class="form-control" id="basic-url" placeholder="Masukan nama kota asal" aria-describedby="basic-addon3">
        </div>
      </div>
      <div class="col">
        <label for="basic-url">Kota Tujuan</label>
        <div class="input-group mb-3">
          <input type="text" name="kota_tujuan" class="form-control" id="basic-url" placeholder="Masukan nama kota tujuan" aria-describedby="basic-addon3">
        </div>
      </div>
      <div class="col">
        <label for="basic-url">Berat Paket</label>
        <div class="input-group mb-3">
          <input type="text" name="berat_paket" id="berat_paket" class="form-control" placeholder="Masukan berat paket (Kg)" id="basic-url" aria-describedby="basic-addon3">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="basic-url">Layanan</label>
        <div class="input-group mb-3">
          <select class="form-control custom-select" name="layanan" id="layanan">
            <option selected disabled>Pilih Layanan</option>
            <option value="regular">Regular (3-5 Hari)</option>
            <option value="ekonomi">Ekonomi (5-7 Hari)</option>
            <option value="super kilat">Super Kilat (1 Hari)</option>
          </select>
        </div>
      </div>
      <div class="col">
        <label for="basic-url">Jenis Packing</label>
        <div class="input-group mb-3">
          <select class="form-control custom-select" id="jenis_packing" name="jenis_packing">
            <option selected disabled>Pilih Jenis Packing</option>
            <option value="bubble wrap">Bubble Wrap</option>
            <option value="kayu">Kayu</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row mt-4 pb-5">
      <div class="col bg-primary p-4">
        <table>
          <tr>
            <td class="p-2">
              <h5>Total Ongkos Kirim</h5>
            </td>
            <td class="p-2">:</td>
            <td class="p-2">
              <h5 id="total_bayar"></h5>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
require_once '../layout/footer.php';
?>