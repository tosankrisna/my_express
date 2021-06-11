<?php

require_once 'Db.php';

class Kurir extends Db
{
  private $db;

  public function __construct()
  {
    $this->db = new Db;
  }

  public function getTotal()
  {
    $sql = "SELECT * FROM tb_kurir";
    return count($this->db->multiView($sql));
  }

  public function viewKurir()
  {
    $sql = "SELECT id_kurir, nama_kurir, email, jenis_kelamin, no_telp FROM tb_kurir ORDER BY id_kurir DESC";
    return $this->db->multiView($sql);
  }

  public function detailKurir($id)
  {
    $sql = "SELECT tb_kurir.*, tb_alamat.*, tb_kendaraan.* FROM tb_kurir JOIN tb_alamat ON tb_kurir.id_kurir = '$id' AND tb_kurir.id_alamat = tb_alamat.id_alamat JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir";
    return $this->db->singleView($sql);
  }

  public function addKurir($nama, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos, $nama_kendaraan, $jenis_kendaraan, $plat_nomor)
  {
    $sql_alamat = "INSERT INTO tb_alamat VALUES('', '$alamat', '$kecamatan', '$kabupaten', '$provinsi', '$kode_pos')";
    $this->db->query($sql_alamat);

    $id_alamat = $this->db->conn->insert_id;
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $sql_kurir = "INSERT INTO tb_kurir VALUES('', '$nama', '$email', '$username', '$pass_hash', '$jenis_kelamin', '$no_telp', '$id_alamat', '$id_admin')";
    $this->db->query($sql_kurir);

    $id_kurir = $this->db->conn->insert_id;
    $sql_kendaraan = "INSERT INTO tb_kendaraan VALUES('', '$nama_kendaraan', '$jenis_kendaraan', '$plat_nomor', '$id_kurir')";
    $this->db->query($sql_kendaraan);
  }

  public function editKurir($nama_kurir, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos, $nama_kendaraan, $jenis_kendaraan, $plat_nomor, $id_kurir, $id_alamat, $id_kendaraan)
  {
    $sql = "UPDATE tb_kurir, tb_alamat, tb_kendaraan SET tb_kurir.nama_kurir = '$nama_kurir', tb_kurir.email = '$email', tb_kurir.username = '$username', tb_kurir.password = '$password', tb_kurir.jenis_kelamin = '$jenis_kelamin', tb_kurir.no_telp = '$no_telp', tb_kurir.id_admin = '$id_admin', tb_alamat.alamat = '$alamat', tb_alamat.kecamatan = '$kecamatan', tb_alamat.kabupaten = '$kabupaten', tb_alamat.provinsi = '$provinsi', tb_alamat.kode_pos = '$kode_pos', tb_kendaraan.nama_kendaraan = '$nama_kendaraan', tb_kendaraan.jenis_kendaraan = '$jenis_kendaraan', tb_kendaraan.plat_nomor = '$plat_nomor' WHERE tb_kurir.id_kurir = '$id_kurir' AND tb_alamat.id_alamat = '$id_alamat' AND tb_kendaraan.id_kendaraan = '$id_kendaraan'";

    return $this->db->query($sql);
  }

  public function hapusKurir($id_kurir, $id_alamat, $id_kendaraan)
  {
    $sql = "DELETE tb_kendaraan, tb_kurir, tb_alamat FROM tb_kendaraan JOIN tb_kurir ON tb_kendaraan.id_kendaraan = '$id_kendaraan' JOIN tb_alamat ON tb_kurir.id_kurir = '$id_kurir' AND tb_alamat.id_alamat = '$id_alamat'";

    return $this->db->query($sql);
  }

  public function searchKurir($keyword)
  {
    $sql = "SELECT id_kurir, nama_kurir, email, jenis_kelamin, no_telp FROM tb_kurir WHERE nama_kurir LIKE '%$keyword%' ORDER BY id_kurir DESC";

    return $this->db->multiView($sql);
  }
}
