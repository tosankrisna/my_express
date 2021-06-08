function errorLogin() {
  $(document).ready(function(){
    Swal.fire({
      icon: 'error',
      title: '<h5>Username atau password salah!</h5>',
    }).then(function() {
      window.location = '../views/public/pages/login.php';
    });
  });
}