<?php

require_once 'Db.php';

class Kendaraan extends Db
{
  private $db;

  public function __construct()
  {
    $this->db = new Db;
  }

  public function getTotal()
  {
    $sql = "SELECT * FROM tb_kendaraan";
    return count($this->db->multiView($sql));
  }

  public function viewKendaraan()
  {
    $sql = "SELECT tb_kurir.nama_kurir, tb_kurir.no_telp, tb_kendaraan.* FROM tb_kurir JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir ORDER BY tb_kurir.id_kurir DESC";

    return $this->db->multiView($sql);
  }

  public function searchKendaraan($keyword)
  {
    $sql = "SELECT tb_kurir.nama_kurir, tb_kurir.no_telp, tb_kendaraan.* FROM tb_kurir JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir WHERE tb_kurir.nama_kurir LIKE '%$keyword%' OR tb_kendaraan.plat_nomor LIKE '%$keyword%' ORDER BY tb_kurir.id_kurir DESC";

    return $this->db->multiView($sql);
  }
}
