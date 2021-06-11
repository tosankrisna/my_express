<?php

class Db
{
  private $db_host = 'localhost';
  private $db_user = 'root';
  private $db_pass = '';
  private $db_name = 'my_express';

  protected $conn;

  public function __construct()
  {
    $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

    if (mysqli_connect_error()) {
      echo 'Gagal connect ke database' . mysqli_connect_error();
      exit;
    }
  }

  public function query($query)
  {
    return mysqli_query($this->conn, $query);
  }

  public function singleView($query)
  {
    $data = $this->query($query);
    $row = mysqli_fetch_assoc($data);
    return $row;
  }

  public function multiView($query)
  {
    $data = $this->query($query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($data)) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function multiadd($query)
  {
    mysqli_multi_query($this->conn, $query);
  }
}
