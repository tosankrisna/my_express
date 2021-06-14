<?php

require_once 'Db.php';

class Paket extends Db
{
  private $db;

  public function __construct()
  {
    $this->db = new Db;
  }

  public function getTotal()
  {
    $sql = "SELECT * FROM tb_paket";
    return count($this->db->multiView($sql));
  }

  public function getTotalByKurir($id)
  {
    $sql = "SELECT * FROM tb_paket WHERE id_kurir = '$id'";
    return count($this->db->multiView($sql));
  }

  public function viewPaket()
  {
    $sql = "SELECT tb_paket.nama_paket, tb_paket.id_paket, tb_tracking.no_resi, tb_tracking.status_paket, tb_tracking.keterangan, tb_pengirim.nama_pengirim, tb_penerima.nama_penerima, tb_kurir.nama_kurir, tb_paket.total_bayar FROM tb_tracking JOIN tb_paket ON tb_tracking.id_paket = tb_paket.id_paket JOIN tb_penerima ON tb_paket.id_penerima = tb_penerima.id_penerima JOIN tb_pengirim ON tb_paket.id_pengirim = tb_pengirim.id_pengirim JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir WHERE tb_tracking.status_paket != 'selesai dikirim' ORDER BY tb_paket.id_paket DESC";

    return $this->db->multiView($sql);
  }

  public function viewPaketKurir($id)
  {
    $sql = "SELECT tb_paket.nama_paket, tb_paket.id_paket, tb_paket.id_kurir, tb_tracking.id_tracking, tb_tracking.no_resi, tb_tracking.keterangan, tb_tracking.status_paket, tb_pengirim.nama_pengirim, tb_penerima.nama_penerima, tb_kurir.nama_kurir, tb_paket.total_bayar FROM tb_tracking JOIN tb_paket ON tb_tracking.id_paket = tb_paket.id_paket JOIN tb_penerima ON tb_paket.id_penerima = tb_penerima.id_penerima JOIN tb_pengirim ON tb_paket.id_pengirim = tb_pengirim.id_pengirim JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir WHERE tb_paket.id_kurir = '$id' AND tb_tracking.status_paket != 'selesai dikirim' ORDER BY tb_paket.id_paket DESC";

    return $this->db->multiView($sql);
  }

  public function detailPaket($id)
  {

    $sql_one = "SELECT tb_paket.*, tb_tracking.*, tb_kurir.id_kurir, tb_kurir.nama_kurir, tb_kurir.jenis_kelamin AS jenis_kelamin_kurir, tb_kurir.no_telp AS no_telp_kurir, tb_kendaraan.*, tb_alamat.id_alamat, tb_alamat.alamat AS alamat_pengirim, tb_alamat.kecamatan AS kecamatan_pengirim, tb_alamat.kabupaten AS kabupaten_pengirim, tb_alamat.provinsi AS provinsi_pengirim, tb_alamat.kode_pos AS kode_pos_pengirim, tb_pengirim.id_pengirim, tb_pengirim.nama_pengirim, tb_pengirim.no_telp AS no_telp_pengirim, tb_pengirim.jenis_kelamin AS jenis_kelamin_pengirim, tb_pengirim.id_alamat AS id_alamat_pengirim FROM tb_paket JOIN tb_pengirim ON tb_paket.id_paket = '$id' AND tb_pengirim.id_pengirim = tb_paket.id_pengirim JOIN tb_alamat ON tb_pengirim.id_alamat = tb_alamat.id_alamat JOIN tb_tracking ON tb_paket.id_paket = tb_tracking.id_paket JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir";

    $sql_two = "SELECT tb_paket.id_paket, tb_paket.id_penerima, tb_penerima.id_penerima, tb_penerima.nama_penerima, tb_penerima.jenis_kelamin AS jenis_kelamin_penerima, tb_penerima.no_telp AS no_telp_penerima, tb_penerima.id_alamat  AS id_alamat_penerima, tb_alamat.id_alamat, tb_alamat.alamat AS alamat_penerima, tb_alamat.kecamatan AS kecamatan_penerima, tb_alamat.kabupaten AS kabupaten_penerima, tb_alamat.provinsi AS provinsi_penerima, tb_alamat.kode_pos AS kode_pos_penerima FROM tb_paket JOIN tb_penerima ON tb_paket.id_paket = '$id' AND tb_penerima.id_penerima = tb_paket.id_penerima JOIN tb_alamat ON tb_penerima.id_alamat = tb_alamat.id_alamat";

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

  public function editPaket($nama_pengirim, $jenis_kelamin_pengirim, $no_telp_pengirim, $alamat_pengirim, $provinsi_pengirim, $kabupaten_pengirim, $kecamatan_pengirim, $kode_pos_pengirim, $id_penginput, $nama_penerima, $jenis_kelamin_penerima, $no_telp_penerima, $alamat_penerima, $provinsi_penerima, $kabupaten_penerima, $kecamatan_penerima, $kode_pos_penerima, $nama_paket, $berat_paket, $jenis_paket, $jenis_packing, $layanan, $kurir, $nomor_resi, $total_bayar, $status_paket, $keterangan, $session_level, $id_alamat_penerima, $id_alamat_pengirim, $id_pengirim, $id_penerima, $id_paket, $id_tracking)
  {
    if ($session_level === 'admin') {
      $sql_paket = "UPDATE tb_paket SET nama_paket = '$nama_paket', berat_paket = '$berat_paket', jenis_paket = '$jenis_paket', jenis_packing = '$jenis_packing', layanan = '$layanan', total_bayar = '$total_bayar', id_admin = '$id_penginput', id_kurir = '$kurir', id_penerima = '$id_penerima', id_cs = NULL WHERE id_paket = '$id_paket'";

      $this->db->query($sql_paket);
    } else {
      $sql_paket = "UPDATE tb_paket SET nama_paket = '$nama_paket', berat_paket = '$berat_paket', jenis_paket = '$jenis_paket', jenis_packing = '$jenis_packing', layanan = '$layanan', total_bayar = '$total_bayar', id_admin = '$id_penginput', id_kurir = '$kurir', id_penerima = NULL, id_cs = '$id_penerima' WHERE id_paket = '$id_paket'";
    }

    $sql_penerima = "UPDATE tb_penerima, tb_alamat SET tb_penerima.nama_penerima = '$nama_penerima', tb_penerima.jenis_kelamin = '$jenis_kelamin_penerima', tb_penerima.no_telp = '$no_telp_penerima', tb_penerima.id_alamat = '$id_alamat_penerima', tb_alamat.alamat = '$alamat_penerima', tb_alamat.kecamatan = '$kecamatan_penerima', tb_alamat.kabupaten = '$kabupaten_penerima', tb_alamat.provinsi = '$provinsi_penerima', tb_alamat.kode_pos = '$kode_pos_penerima' WHERE tb_penerima.id_penerima = '$id_penerima' AND tb_alamat.id_alamat = '$id_alamat_penerima'";
    $this->db->query($sql_penerima);

    $sql_pengirim = "UPDATE tb_pengirim, tb_alamat SET tb_pengirim.nama_pengirim = '$nama_pengirim', tb_pengirim.jenis_kelamin = '$jenis_kelamin_pengirim', tb_pengirim.no_telp = '$no_telp_pengirim', tb_pengirim.id_alamat = '$id_alamat_pengirim', tb_alamat.alamat = '$alamat_pengirim', tb_alamat.kecamatan = '$kecamatan_pengirim', tb_alamat.kabupaten = '$kabupaten_pengirim', tb_alamat.provinsi = '$provinsi_pengirim', tb_alamat.kode_pos = '$kode_pos_pengirim' WHERE tb_pengirim.id_pengirim = '$id_pengirim' AND tb_alamat.id_alamat = '$id_alamat_pengirim'";
    $this->db->query($sql_pengirim);

    $sql_tracking = "UPDATE tb_tracking SET status_paket = '$status_paket', keterangan = '$keterangan', no_resi = '$nomor_resi' WHERE id_tracking = '$id_tracking' AND id_paket = '$id_paket'";

    $this->db->query($sql_tracking);
  }

  public function searchPaket($keyword)
  {
    $sql = "SELECT tb_paket.nama_paket, tb_paket.id_paket, tb_tracking.no_resi, tb_tracking.status_paket, tb_pengirim.nama_pengirim, tb_penerima.nama_penerima, tb_kurir.nama_kurir, tb_paket.total_bayar FROM tb_tracking JOIN tb_paket ON tb_tracking.id_paket = tb_paket.id_paket JOIN tb_penerima ON tb_paket.id_penerima = tb_penerima.id_penerima JOIN tb_pengirim ON tb_paket.id_pengirim = tb_pengirim.id_pengirim JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir WHERE tb_tracking.no_resi LIKE '%$keyword%' ORDER BY tb_paket.id_paket DESC";

    return $this->db->multiView($sql);
  }

  public function searchPaketKurir($id, $keyword)
  {
    $sql = "SELECT tb_paket.nama_paket, tb_paket.id_paket, tb_paket.id_kurir, tb_tracking.no_resi, tb_tracking.status_paket, tb_pengirim.nama_pengirim, tb_penerima.nama_penerima, tb_kurir.nama_kurir, tb_paket.total_bayar FROM tb_tracking JOIN tb_paket ON tb_tracking.id_paket = tb_paket.id_paket JOIN tb_penerima ON tb_paket.id_penerima = tb_penerima.id_penerima JOIN tb_pengirim ON tb_paket.id_pengirim = tb_pengirim.id_pengirim JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir WHERE tb_tracking.no_resi LIKE '%$keyword%' AND tb_paket.id_kurir = '$id' ORDER BY tb_paket.id_paket DESC";

    return $this->db->multiView($sql);
  }

  public function trackingPaket($keyword)
  {
    $sql_one = "SELECT tb_paket.*, tb_tracking.*, tb_kurir.id_kurir, tb_kurir.nama_kurir, tb_kurir.jenis_kelamin AS jenis_kelamin_kurir, tb_kurir.no_telp AS no_telp_kurir, tb_kendaraan.*, tb_alamat.id_alamat, tb_alamat.alamat AS alamat_pengirim, tb_alamat.kecamatan AS kecamatan_pengirim, tb_alamat.kabupaten AS kabupaten_pengirim, tb_alamat.provinsi AS provinsi_pengirim, tb_alamat.kode_pos AS kode_pos_pengirim, tb_pengirim.id_pengirim, tb_pengirim.nama_pengirim, tb_pengirim.no_telp AS no_telp_pengirim, tb_pengirim.jenis_kelamin AS jenis_kelamin_pengirim, tb_pengirim.id_alamat FROM tb_paket JOIN tb_pengirim ON tb_pengirim.id_pengirim = tb_paket.id_pengirim JOIN tb_alamat ON tb_pengirim.id_alamat = tb_alamat.id_alamat JOIN tb_tracking ON tb_paket.id_paket = tb_tracking.id_paket JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir WHERE tb_tracking.no_resi LIKE '%$keyword%'";

    $sql_two = "SELECT tb_tracking.*, tb_paket.id_paket, tb_paket.id_penerima, tb_penerima.id_penerima, tb_penerima.nama_penerima, tb_penerima.jenis_kelamin AS jenis_kelamin_penerima, tb_penerima.no_telp AS no_telp_penerima, tb_penerima.id_alamat, tb_alamat.id_alamat, tb_alamat.alamat AS alamat_penerima, tb_alamat.kecamatan AS kecamatan_penerima, tb_alamat.kabupaten AS kabupaten_penerima, tb_alamat.provinsi AS provinsi_penerima, tb_alamat.kode_pos AS kode_pos_penerima FROM tb_paket JOIN tb_tracking ON tb_paket.id_paket = tb_tracking.id_paket JOIN tb_penerima ON tb_penerima.id_penerima = tb_paket.id_penerima JOIN tb_alamat ON tb_penerima.id_alamat = tb_alamat.id_alamat WHERE tb_tracking.no_resi LIKE '%$keyword%'";

    $data_one = $this->db->singleView($sql_one);
    $data_two = $this->db->singleView($sql_two);

    return array('data_one' => $data_one, 'data_two' => $data_two);
  }

  public function hapusPaket($id_paket, $id_pengirim, $id_penerima, $id_alamat_pengirim, $id_alamat_penerima, $id_tracking)
  {
    $sql = "DELETE tb_tracking, tb_paket, tb_penerima, tb_pengirim, tb_alamat FROM tb_tracking JOIN tb_paket ON tb_tracking.id_tracking = '$id_tracking' AND tb_paket.id_paket = '$id_paket' JOIN tb_penerima ON tb_penerima.id_penerima = '$id_penerima' AND tb_paket.id_penerima = '$id_penerima' JOIN tb_pengirim ON tb_pengirim.id_pengirim = '$id_pengirim' AND tb_paket.id_pengirim = '$id_pengirim' JOIN tb_alamat ON tb_alamat.id_alamat = '$id_alamat_penerima' AND tb_penerima.id_penerima = '$id_penerima' OR tb_alamat.id_alamat = '$id_alamat_pengirim' AND tb_pengirim.id_pengirim = '$id_pengirim'";

    return $this->db->query($sql);
  }

  public function proses($id_tracking)
  {
    $sql = "UPDATE tb_tracking SET status_paket = 'sedang dikirim', tgl_kirim = NOW() WHERE id_tracking = '$id_tracking'";

    return $this->db->query($sql);
  }

  public function detailUpdateTracking($id)
  {
    $sql = "SELECT * FROM tb_tracking WHERE id_tracking = '$id'";

    return $this->db->singleView($sql);
  }

  public function updateTracking($status_paket, $keterangan, $tgl_kirim, $id_tracking)
  {
    if ($status_paket === 'selesai dikirim') {
      $sql = "UPDATE tb_tracking SET status_paket = '$status_paket', keterangan = '$keterangan', tgl_kirim = '$tgl_kirim', tgl_terima = NOW() WHERE id_tracking = '$id_tracking'";
    } else if ($status_paket === 'sedang dikirim') {
      $sql = "UPDATE tb_tracking SET status_paket = '$status_paket', keterangan = '$keterangan', tgl_kirim = '$tgl_kirim', tgl_terima = NULL WHERE id_tracking = '$id_tracking'";
    }

    return $this->db->query($sql);
  }

  public function viewHistory()
  {
    $sql = "SELECT tb_paket.nama_paket, tb_paket.id_paket, tb_tracking.no_resi, tb_tracking.status_paket, tb_tracking.keterangan, tb_pengirim.nama_pengirim, tb_penerima.nama_penerima, tb_kurir.nama_kurir, tb_paket.total_bayar FROM tb_tracking JOIN tb_paket ON tb_tracking.id_paket = tb_paket.id_paket JOIN tb_penerima ON tb_paket.id_penerima = tb_penerima.id_penerima JOIN tb_pengirim ON tb_paket.id_pengirim = tb_pengirim.id_pengirim JOIN tb_kurir ON tb_paket.id_kurir = tb_kurir.id_kurir WHERE tb_tracking.status_paket = 'selesai dikirim' ORDER BY tb_paket.id_paket DESC";

    return $this->db->multiView($sql);
  }
}
