<?php

require_once '../init.php';

$log = new login();

if (isset($_POST['submit'])) {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  $log->loginUser($username, $password);
}
