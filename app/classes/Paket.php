<?php

require_once 'Db.php';

class Paket extends Db
{
  private $db;

  public function __construct()
  {
    $this->db = new Db;
  }
}
