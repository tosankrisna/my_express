<?php

require_once 'Db.php';

class Login extends Db
{
  private $db;

  public function __construct()
  {
    $this->db = new Db;
  }

  public function loginUser($username, $password)
  {
    $sql_admin = $this->db->query("SELECT * FROM tb_admin WHERE username = '$username'");
    $sql_cs = $this->db->query("SELECT * FROM tb_cs WHERE username = '$username'");
    $sql_kurir = $this->db->query("SELECT * FROM tb_kurir WHERE username = '$username'");

    $cek_admin = mysqli_num_rows($sql_admin);
    $data_admin = mysqli_fetch_assoc($sql_admin);

    $cek_cs = mysqli_num_rows($sql_cs);
    $data_cs = mysqli_fetch_assoc($sql_cs);

    $cek_kurir = mysqli_num_rows($sql_kurir);
    $data_kurir = mysqli_fetch_assoc($sql_kurir);

    $error = "<link rel='stylesheet' href='../assets/css/public.css'>
              <link rel='stylesheet' href='../assets/admin/plugins/sweetalert2/sweetalert2.css'>
              <script src='../assets/admin/plugins/jquery/jquery.min.js'></script>
              <script src='../assets/admin/plugins/sweetalert2/sweetalert2.min.js'></script>
              <script src='../assets/js/errorMessage.js'></script>
              <script>
                errorLogin();
              </script>";

    if ($cek_admin > 0) {
      if (password_verify($password, $data_admin['password'])) {
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['id'] = $data_admin['id_admin'];
        $_SESSION['nama'] = $data_admin['nama_admin'];
        $_SESSION['level'] = 'admin';

        header('Location: ../views/dashboard/pages/home.php');
      } else {
        echo $error;
      }
    } else if ($cek_cs > 0) {
      if (password_verify($password, $data_cs['password'])) {
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['id'] = $data_cs['id_cs'];
        $_SESSION['nama'] = $data_cs['nama_cs'];
        $_SESSION['level'] = 'customer service';

        header('Location: ../views/dashboard/pages/home.php');
      } else {
        echo $error;
      }
    } else if ($cek_kurir > 0) {
      if (password_verify($password, $data_kurir['password'])) {
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['id'] = $data_kurir['id_kurir'];
        $_SESSION['nama'] = $data_kurir['nama_kurir'];
        $_SESSION['level'] = 'kurir';

        header('Location: ../views/dashboard/pages/home.php');
      } else {
        echo $error;
      }
    } else {
      echo $error;
    }
  }

  public function lupaPassword($username, $password)
  {
    $sql_admin = $this->db->query("SELECT * FROM tb_admin WHERE username = '$username'");
    $sql_cs = $this->db->query("SELECT * FROM tb_cs WHERE username = '$username'");
    $sql_kurir = $this->db->query("SELECT * FROM tb_kurir WHERE username = '$username'");

    $cek_admin = mysqli_num_rows($sql_admin);
    $cek_cs = mysqli_num_rows($sql_cs);
    $cek_kurir = mysqli_num_rows($sql_kurir);

    if ($cek_admin > 0) {
      if (mysqli_fetch_assoc($sql_admin) > 0) {
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        $new_admin_pass = "UPDATE tb_admin SET username = '$username', password = '$pass_hash' WHERE username = '$username'";
        $this->db->query($new_admin_pass);

        header('Location: ../views/public/pages/login.php');
      }
    } else if ($cek_cs > 0) {
      if (mysqli_fetch_assoc($sql_cs) > 0) {
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        $new_cs_pass = "UPDATE tb_cs SET username = '$username', password = '$pass_hash' WHERE username = '$username'";
        $this->db->query($new_cs_pass);

        header('Location: ../views/public/pages/login.php');
      }
    } else if ($cek_kurir > 0) {
      if (mysqli_fetch_assoc($sql_admin) > 0) {
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        $new_kurir_pass = "UPDATE tb_kurir SET username = '$username', password = '$pass_hash' WHERE username = '$username'";
        $this->db->query($new_kurir_pass);

        header('Location: ../views/public/pages/login.php');
      }
    }
  }

  public function logoutUser()
  {
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../views/public/pages/login.php');
  }
}
