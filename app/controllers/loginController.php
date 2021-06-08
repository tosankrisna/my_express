<?php

require_once '../init.php';

$log = new login();

$aksi = $_GET['aksi'];

if ($aksi === 'login') {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  $log->loginUser($username, $password);
} else if ($aksi === 'lupa_password') {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  $log->lupaPassword($username, $password);
} else if ($aksi === 'logout') {
  $log->logoutUser();
}
