<?php

require_once '../init.php';

$db = new Db;


if (!isset($_POST['searchTerm'])) {
  $fetchData =  $db->query("SELECT * FROM tb_kurir JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir ORDER BY nama_kurir LIMIT 5");
} else {
  $search = $_POST['searchTerm'];
  $fetchData = $db->query("SELECT * FROM tb_kurir JOIN tb_kendaraan ON tb_kurir.id_kurir = tb_kendaraan.id_kurir WHERE tb_kurir.nama_kurir LIKE '%$search%' OR tb_kendaraan.jenis_kendaraan LIKE '%$search%' LIMIT 5");
}

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {
  $data[] = array("id" => $row['id_kurir'], "text" => $row['nama_kurir'] . ' (' . $row['jenis_kendaraan'] . ')');
}
echo json_encode($data);
