<?php

require_once '../init.php';

$paket = new Paket;
$aksi = $_GET['aksi'];
// $id_paket = $_GET['id_paket'];
// $id_alamat = $_GET['id_alamat'];
// $id_kurir = $_GET['id_kurir'];
// $id_pengirim = $_GET['id_pengirim'];
// $id_penerima = $_GET['id_penerima'];

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
}
