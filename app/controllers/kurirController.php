<?php

require_once '../init.php';

$kurir = new Kurir;
$aksi = $_GET['aksi'];
$id_kurir = $_GET['id_kurir'];
$id_alamat = $_GET['id_alamat'];
$id_kendaraan = $_GET['id_kendaraan'];

if ($aksi === 'tambah') {
  $nama_kurir = htmlspecialchars($_POST['nama_kurir']);
  $email = htmlspecialchars($_POST['email']);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
  $no_telp = htmlspecialchars($_POST['no_telp']);
  $id_admin = htmlspecialchars($_POST['id_admin']);
  $alamat = htmlspecialchars($_POST['alamat']);
  $kecamatan = htmlspecialchars($_POST['kecamatan']);
  $kabupaten = htmlspecialchars($_POST['kabupaten']);
  $provinsi = htmlspecialchars($_POST['provinsi']);
  $kode_pos = htmlspecialchars($_POST['kode_pos']);
  $nama_kendaraan = htmlspecialchars($_POST['nama_kendaraan']);
  $jenis_kendaraan = htmlspecialchars($_POST['jenis_kendaraan']);
  $plat_nomor = htmlspecialchars($_POST['plat_nomor']);

  $kurir->addKurir($nama_kurir, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos, $nama_kendaraan, $jenis_kendaraan, $plat_nomor);
  header('Location: ../views/dashboard/pages/kurir.php');
} else if ($aksi === 'edit') {
  $nama_kurir = htmlspecialchars($_POST['nama_kurir']);
  $email = htmlspecialchars($_POST['email']);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
  $no_telp = htmlspecialchars($_POST['no_telp']);
  $id_admin = htmlspecialchars($_POST['id_admin']);
  $alamat = htmlspecialchars($_POST['alamat']);
  $kecamatan = htmlspecialchars($_POST['kecamatan']);
  $kabupaten = htmlspecialchars($_POST['kabupaten']);
  $provinsi = htmlspecialchars($_POST['provinsi']);
  $kode_pos = htmlspecialchars($_POST['kode_pos']);
  $nama_kendaraan = htmlspecialchars($_POST['nama_kendaraan']);
  $jenis_kendaraan = htmlspecialchars($_POST['jenis_kendaraan']);
  $plat_nomor = htmlspecialchars($_POST['plat_nomor']);

  $kurir->editKurir($nama_kurir, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos, $nama_kendaraan, $jenis_kendaraan, $plat_nomor, $id_kurir, $id_alamat, $id_kendaraan);
  header('Location: ../views/dashboard/components/cardDetailKurir.php?id=' . $id_kurir);
} else if ($aksi === 'hapus') {
  $kurir->hapusKurir($id_kurir, $id_alamat, $id_kendaraan);
  header('Location: ../views/dashboard/pages/kurir.php');
}
