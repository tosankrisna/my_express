<?php

require_once '../init.php';

$cs = new CustomerService;
$aksi = $_GET['aksi'];
$id_cs = $_GET['id_cs'];
$id_alamat = $_GET['id_alamat'];

if ($aksi === 'tambah') {
  $nama_cs = htmlspecialchars($_POST['nama_cs']);
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

  $cs->addCustomerService($nama_cs, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos);
  header('Location: ../views/dashboard/pages/customerService.php');
} else if ($aksi === 'edit') {
  $nama_cs = htmlspecialchars($_POST['nama_cs']);
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

  $cs->editCustomerService($nama_cs, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos, $id_cs, $id_alamat);
  header('Location: ../views/dashboard/components/cardDetailCs.php?id=' . $id_cs);
} else if ($aksi === 'hapus') {
  $cs->hapusCustomerService($id_cs, $id_alamat);
  header('Location: ../views/dashboard/pages/customerService.php');
}
