<?php

require_once '../init.php';

$paket = new Paket;
$aksi = $_GET['aksi'];

$id_paket = $_GET['id_paket'];
$id_pengirim = $_GET['id_pengirim'];
$id_penerima = $_GET['id_penerima'];
$id_alamat_pengirim = $_GET['id_alamat_pengirim'];
$id_alamat_penerima = $_GET['id_alamat_penerima'];
$id_tracking = $_GET['id_tracking'];
$page = $_GET['page'];

if ($aksi === 'tambah') {
  $nama_pengirim = htmlspecialchars($_POST['nama_pengirim']);
  $jenis_kelamin_pengirim = htmlspecialchars($_POST['jenis_kelamin_pengirim']);
  $no_telp_pengirim = htmlspecialchars($_POST['no_telp_pengirim']);
  $alamat_pengirim = htmlspecialchars($_POST['alamat_pengirim']);
  $provinsi_pengirim = htmlspecialchars($_POST['provinsi_pengirim']);
  $kabupaten_pengirim = htmlspecialchars($_POST['kabupaten_pengirim']);
  $kecamatan_pengirim = htmlspecialchars($_POST['kecamatan_pengirim']);
  $kode_pos_pengirim = htmlspecialchars($_POST['kode_pos_pengirim']);
  $id_penginput = htmlspecialchars($_POST['id_penginput']);
  $session_level = htmlspecialchars($_POST['session_level']);

  $nama_penerima = htmlspecialchars($_POST['nama_penerima']);
  $jenis_kelamin_penerima = htmlspecialchars($_POST['jenis_kelamin_penerima']);
  $no_telp_penerima = htmlspecialchars($_POST['no_telp_penerima']);
  $alamat_penerima = htmlspecialchars($_POST['alamat_penerima']);
  $provinsi_penerima = htmlspecialchars($_POST['provinsi_penerima']);
  $kabupaten_penerima = htmlspecialchars($_POST['kabupaten_penerima']);
  $kecamatan_penerima = htmlspecialchars($_POST['kecamatan_penerima']);
  $kode_pos_penerima = htmlspecialchars($_POST['kode_pos_penerima']);

  $nama_paket = htmlspecialchars($_POST['nama_paket']);
  $berat_paket = htmlspecialchars($_POST['berat_paket']);
  $jenis_paket = htmlspecialchars($_POST['jenis_paket']);
  $jenis_packing = htmlspecialchars($_POST['jenis_packing']);
  $layanan = htmlspecialchars($_POST['layanan']);
  $kurir = htmlspecialchars($_POST['kurir']);
  $nomor_resi = htmlspecialchars($_POST['nomor_resi']);
  $total_bayar = htmlspecialchars($_POST['total_bayar']);
  $status_paket = htmlspecialchars($_POST['status_paket']);
  $keterangan = htmlspecialchars($_POST['keterangan']);

  $paket->addPaket($nama_pengirim, $jenis_kelamin_pengirim, $no_telp_pengirim, $alamat_pengirim, $provinsi_pengirim, $kabupaten_pengirim, $kecamatan_pengirim, $kode_pos_pengirim, $id_penginput, $nama_penerima, $jenis_kelamin_penerima, $no_telp_penerima, $alamat_penerima, $provinsi_penerima, $kabupaten_penerima, $kecamatan_penerima, $kode_pos_penerima, $nama_paket, $berat_paket, $jenis_paket, $jenis_packing, $layanan, $kurir, $nomor_resi, $total_bayar, $status_paket, $keterangan, $session_level);

  header('Location: ../views/dashboard/pages/paket.php');
} else if ($aksi === 'edit') {
  $nama_pengirim = htmlspecialchars($_POST['nama_pengirim']);
  $jenis_kelamin_pengirim = htmlspecialchars($_POST['jenis_kelamin_pengirim']);
  $no_telp_pengirim = htmlspecialchars($_POST['no_telp_pengirim']);
  $alamat_pengirim = htmlspecialchars($_POST['alamat_pengirim']);
  $provinsi_pengirim = htmlspecialchars($_POST['provinsi_pengirim']);
  $kabupaten_pengirim = htmlspecialchars($_POST['kabupaten_pengirim']);
  $kecamatan_pengirim = htmlspecialchars($_POST['kecamatan_pengirim']);
  $kode_pos_pengirim = htmlspecialchars($_POST['kode_pos_pengirim']);
  $id_penginput = htmlspecialchars($_POST['id_penginput']);
  $session_level = htmlspecialchars($_POST['session_level']);

  $nama_penerima = htmlspecialchars($_POST['nama_penerima']);
  $jenis_kelamin_penerima = htmlspecialchars($_POST['jenis_kelamin_penerima']);
  $no_telp_penerima = htmlspecialchars($_POST['no_telp_penerima']);
  $alamat_penerima = htmlspecialchars($_POST['alamat_penerima']);
  $provinsi_penerima = htmlspecialchars($_POST['provinsi_penerima']);
  $kabupaten_penerima = htmlspecialchars($_POST['kabupaten_penerima']);
  $kecamatan_penerima = htmlspecialchars($_POST['kecamatan_penerima']);
  $kode_pos_penerima = htmlspecialchars($_POST['kode_pos_penerima']);

  $nama_paket = htmlspecialchars($_POST['nama_paket']);
  $berat_paket = htmlspecialchars($_POST['berat_paket']);
  $jenis_paket = htmlspecialchars($_POST['jenis_paket']);
  $jenis_packing = htmlspecialchars($_POST['jenis_packing']);
  $layanan = htmlspecialchars($_POST['layanan']);
  $kurir = htmlspecialchars($_POST['kurir']);
  $nomor_resi = htmlspecialchars($_POST['nomor_resi']);
  $total_bayar = htmlspecialchars($_POST['total_bayar']);
  $status_paket = htmlspecialchars($_POST['status_paket']);
  $keterangan = htmlspecialchars($_POST['keterangan']);
  $id_alamat_penerima = htmlspecialchars($_POST['id_alamat_penerima']);
  $id_alamat_pengirim = htmlspecialchars($_POST['id_alamat_pengirim']);
  $id_pengirim = htmlspecialchars($_POST['id_pengirim']);
  $id_penerima = htmlspecialchars($_POST['id_penerima']);
  $id_paket = htmlspecialchars($_POST['id_paket']);
  $id_tracking = htmlspecialchars($_POST['id_tracking']);

  $paket->editPaket($nama_pengirim, $jenis_kelamin_pengirim, $no_telp_pengirim, $alamat_pengirim, $provinsi_pengirim, $kabupaten_pengirim, $kecamatan_pengirim, $kode_pos_pengirim, $id_penginput, $nama_penerima, $jenis_kelamin_penerima, $no_telp_penerima, $alamat_penerima, $provinsi_penerima, $kabupaten_penerima, $kecamatan_penerima, $kode_pos_penerima, $nama_paket, $berat_paket, $jenis_paket, $jenis_packing, $layanan, $kurir, $nomor_resi, $total_bayar, $status_paket, $keterangan, $session_level, $id_alamat_penerima, $id_alamat_pengirim, $id_pengirim, $id_penerima, $id_paket, $id_tracking);
  header('Location: ../views/dashboard/components/cardDetailPaket.php?id=' . $id_paket);
} else if ($aksi === 'hapus') {
  $paket->hapusPaket($id_paket, $id_pengirim, $id_penerima, $id_alamat_pengirim, $id_alamat_penerima, $id_tracking, $page);
  header('Location: ../views/dashboard/pages/' . $page . '.php');
} else if ($aksi === 'proses') {
  $paket->proses($id_tracking);
  header('Location: ../views/dashboard/pages/paket.php');
} else if ($aksi === 'update_tracking') {
  $status_paket = $_POST['status_paket'];
  $keterangan = $_POST['keterangan'];
  $tgl_kirim = $_POST['tgl_kirim'];

  $paket->updateTracking($status_paket, $keterangan, $tgl_kirim, $id_tracking);
  header('Location: ../views/dashboard/pages/paket.php');
}
