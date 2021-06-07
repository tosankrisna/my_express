<?php

require_once 'Db.php';

class Login extends Db
{
  public function loginUser($username, $password)
  {
    $sql_admin = mysqli_query($this->conn, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");
    $sql_cs = mysqli_query($this->conn, "SELECT * FROM tb_cs WHERE username = '$username'");
    $sql_kurir = mysqli_query($this->conn, "SELECT * FROM tb_kurir WHERE username = '$username'");

    $cek_admin = mysqli_num_rows($sql_admin);
    // $data_admin = mysqli_fetch_assoc($sql_admin);

    $cek_cs = mysqli_num_rows($sql_cs);
    $data_cs = mysqli_fetch_assoc($sql_cs);

    $cek_kurir = mysqli_num_rows($sql_kurir);
    $data_kurir = mysqli_fetch_assoc($sql_kurir);

    if ($cek_admin > 0) {
      if ($data_admin = mysqli_fetch_assoc($sql_admin)) {
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['id'] = $data_admin['id_admin'];
        $_SESSION['nama'] = $data_admin['nama_admin'];
        $_SESSION['level'] = 'admin';

        header('Location: ../views/dashboard/pages/home.php');
      }
    } else if ($cek_cs > 0) {
      if (password_verify($password, $data_cs['password'])) {
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['id'] = $data_cs['id_cs'];
        $_SESSION['nama'] = $data_cs['nama_cs'];
        $_SESSION['level'] = 'customer service';

        header('Location: ../views/dashboard/pages/home.php');
      }
    } else if ($cek_kurir > 0) {
      if (password_verify($password, $data_kurir['password'])) {
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['id'] = $data_kurir['id_kurir'];
        $_SESSION['nama'] = $data_kurir['nama_kurir'];
        $_SESSION['level'] = 'kurir';

        header('Location: ../views/dashboard/pages/home.php');
      }
    } else {
      echo "
        <link rel='stylesheet' href='../assets/css/public.css'>
        <link rel='stylesheet' href='../assets/admin/plugins/sweetalert2/sweetalert2.css'>
        <script src='../assets/admin/plugins/jquery/jquery.min.js'></script>
        <script src='../assets/admin/plugins/sweetalert2/sweetalert2.min.js'></script>
        <script type='text/javascript'>
          $(document).ready(function(){
            Swal.fire({
              icon: 'error',
              title: '<h5>Username atau password salah!</h5>',
            }).then(function() {
              window.location = '../views/public/pages/login.php';
            });
          });
        </script>";
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
