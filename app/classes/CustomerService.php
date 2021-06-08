<?php

require_once 'Db.php';

class CustomerService extends Db
{
  private $db;

  public function __construct()
  {
    $this->db = new Db;
  }

  public function getTotal()
  {
    $sql = "SELECT * FROM tb_cs";
    return count($this->db->multiView($sql));
  }

  public function viewCustomerService()
  {
    $sql = "SELECT id_cs, nama_cs, email, jenis_kelamin, no_telp FROM tb_cs ORDER BY id_cs DESC";
    return $this->db->multiView($sql);
  }

  public function detailCustomerService($id)
  {
    $sql = "SELECT tb_cs.*, tb_alamat.* FROM tb_cs JOIN tb_alamat ON tb_cs.id_cs = $id AND tb_cs.id_alamat = tb_alamat.id_alamat";
    return $this->db->singleView($sql);
  }

  public function addCustomerService($nama, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos)
  {
    $sql_alamat = "INSERT INTO tb_alamat VALUES('', '$alamat', '$kecamatan', '$kabupaten', '$provinsi', '$kode_pos')";
    $this->db->query($sql_alamat);

    $id_alamat = $this->db->conn->insert_id;
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $sql_cs = "INSERT INTO tb_cs VALUES('', '$nama', '$email', '$username', '$pass_hash', '$jenis_kelamin', '$no_telp', '$id_alamat','$id_admin')";
    $this->db->query($sql_cs);
  }

  public function editCustomerService($nama, $email, $username, $password, $jenis_kelamin, $no_telp, $id_admin, $alamat, $kecamatan, $kabupaten, $provinsi, $kode_pos, $id_cs, $id_alamat)
  {
    $sql = "UPDATE tb_cs, tb_alamat SET tb_cs.nama_cs = '$nama', tb_cs.email = '$email', tb_cs.username = '$username', tb_cs.password = '$password', tb_cs.jenis_kelamin = '$jenis_kelamin', tb_cs.no_telp = '$no_telp', tb_cs.id_admin = '$id_admin',
            tb_alamat.alamat = '$alamat', tb_alamat.kecamatan = '$kecamatan', tb_alamat.kabupaten = '$kabupaten', tb_alamat.provinsi = '$provinsi', tb_alamat.kode_pos = '$kode_pos' WHERE tb_cs.id_cs = $id_cs AND tb_alamat.id_alamat = $id_alamat";

    return $this->db->query($sql);
  }

  public function hapusCustomerService($id_cs, $id_alamat)
  {
    $sql = "DELETE tb_cs, tb_alamat FROM tb_cs JOIN tb_alamat WHERE tb_cs.id_cs = '$id_cs' AND tb_alamat.id_alamat = '$id_alamat'";

    return $this->db->query($sql);
  }

  public function searchCustomerService($keyword)
  {
    $sql = "SELECT id_cs, nama_cs, email, jenis_kelamin, no_telp FROM tb_cs WHERE nama_cs LIKE '%$keyword%' ORDER BY id_cs DESC";

    return $this->db->multiView($sql);
  }
}
