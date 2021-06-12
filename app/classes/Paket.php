<?php

require_once 'Db.php';

class Paket extends Db
{
  private $db;

  public function __construct()
  {
    $this->db = new Db;
  }

  public function viewPaket()
  {
    $sql = "SELECT tb_paket.nama_paket, tb_paket.id_paket, tb_tracking.no_resi, tb_tracking.status_paket, tb_pengirim.nama_pengirim, tb_penerima.nama_penerima, tb_kurir.nama_kurir, tb_paket.total_bayar FROM tb_tracking JOIN tb_paket ON tb_tracking.id_paket = tb_paket.id_paket JOIN tb_penerima ON tb_paket.id_penerima = tb_penerima.id_penerima JOIN tb_pengirim ON tb_paket.id_pengirim = tb_pengirim.id_pengirim JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir ORDER BY tb_paket.id_paket DESC";

    return $this->db->multiView($sql);
  }

  public function detailPaket($id)
  {

    $sql_one = "SELECT tb_paket.*, tb_tracking.*, tb_kurir.id_kurir, tb_kurir.nama_kurir, tb_kurir.jenis_kelamin AS jenis_kelamin_kurir, tb_kurir.no_telp AS no_telp_kurir, tb_kendaraan.*, tb_alamat.id_alamat, tb_alamat.alamat AS alamat_pengirim, tb_alamat.kecamatan AS kecamatan_pengirim, tb_alamat.kabupaten AS kabupaten_pengirim, tb_alamat.provinsi AS provinsi_pengirim, tb_alamat.kode_pos AS kode_pos_pengirim, tb_pengirim.id_pengirim, tb_pengirim.nama_pengirim, tb_pengirim.no_telp AS no_telp_pengirim, tb_pengirim.jenis_kelamin AS jenis_kelamin_pengirim, tb_pengirim.id_alamat FROM tb_paket JOIN tb_pengirim ON tb_paket.id_paket = '$id' AND tb_pengirim.id_pengirim = tb_paket.id_pengirim JOIN tb_alamat ON tb_pengirim.id_alamat = tb_alamat.id_alamat JOIN tb_tracking ON tb_paket.id_paket = tb_tracking.id_paket JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir";

    $sql_two = "SELECT tb_paket.id_paket, tb_paket.id_penerima, tb_penerima.id_penerima, tb_penerima.nama_penerima, tb_penerima.jenis_kelamin AS jenis_kelamin_penerima, tb_penerima.no_telp AS no_telp_penerima, tb_penerima.id_alamat, tb_alamat.id_alamat, tb_alamat.alamat AS alamat_penerima, tb_alamat.kecamatan AS kecamatan_penerima, tb_alamat.kabupaten AS kabupaten_penerima, tb_alamat.provinsi AS provinsi_penerima, tb_alamat.kode_pos AS kode_pos_penerima FROM tb_paket JOIN tb_penerima ON tb_paket.id_paket = '$id' AND tb_penerima.id_penerima = tb_paket.id_penerima JOIN tb_alamat ON tb_penerima.id_alamat = tb_alamat.id_alamat";

    $data_one = $this->db->singleView($sql_one);
    $data_two = $this->db->singleView($sql_two);

    return array('data_one' => $data_one, 'data_two' => $data_two);
  }

  public function addPaket($nama_pengirim, $jenis_kelamin_pengirim, $no_telp_pengirim, $alamat_pengirim, $provinsi_pengirim, $kabupaten_pengirim, $kecamatan_pengirim, $kode_pos_pengirim, $id_penginput, $nama_penerima, $jenis_kelamin_penerima, $no_telp_penerima, $alamat_penerima, $provinsi_penerima, $kabupaten_penerima, $kecamatan_penerima, $kode_pos_penerima, $nama_paket, $berat_paket, $jenis_paket, $jenis_packing, $layanan, $kurir, $nomor_resi, $total_bayar, $status_paket, $keterangan, $session_level)
  {
    $sql_alamat_pengirim = "INSERT INTO tb_alamat VALUES('', '$alamat_pengirim', '$kecamatan_pengirim', '$kabupaten_pengirim', '$provinsi_pengirim', '$kode_pos_pengirim')";
    $this->db->query($sql_alamat_pengirim);
    $id_alamat_pengirim = $this->db->conn->insert_id;

    $sql_pengirim = "INSERT INTO tb_pengirim VALUES('', '$nama_pengirim', '$no_telp_pengirim', '$jenis_kelamin_pengirim', '$id_alamat_pengirim')";
    $this->db->query($sql_pengirim);
    $id_pengirim = $this->db->conn->insert_id;

    $sql_alamat_penerima = "INSERT INTO tb_alamat VALUES('', '$alamat_penerima', '$kecamatan_penerima', '$kabupaten_penerima', '$provinsi_penerima', '$kode_pos_penerima')";
    $this->db->query($sql_alamat_penerima);
    $id_alamat_penerima = $this->db->conn->insert_id;

    $sql_penerima = "INSERT INTO tb_penerima VALUES('', '$nama_penerima', '$jenis_kelamin_penerima', '$no_telp_penerima', '$id_alamat_penerima')";
    $this->db->query($sql_penerima);
    $id_penerima = $this->db->conn->insert_id;

    if ($session_level === 'admin') {
      $sql_paket = "INSERT INTO tb_paket VALUES('', '$nama_paket', '$berat_paket', '$jenis_paket', '$jenis_packing', '$layanan', '$total_bayar', '$id_penginput', '$kurir', '$id_penerima', '$id_pengirim', NULL)";

      $this->db->query($sql_paket);
      $id_paket = $this->db->conn->insert_id;
    } else {
      $sql_paket = "INSERT INTO tb_paket VALUES('', '$nama_paket', '$berat_paket', '$jenis_paket', '$jenis_packing', '$layanan', '$total_bayar', NULL, '$kurir', '$id_penerima', '$id_pengirim', '$id_penginput')";

      $this->db->query($sql_paket);
      $id_paket = $this->db->conn->insert_id;
    }

    $sql_tracking = "INSERT INTO tb_tracking VALUES('', '$status_paket', '$keterangan', '$nomor_resi', NULL, NULL, '$id_paket', '$id_penerima', '$kurir', '$id_pengirim')";
    $this->db->query($sql_tracking);
  }
}
