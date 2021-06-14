$(document).ready(function() {
  if(window.location.pathname !== '/my_express/app/views/dashboard/components/formEditPaket.php') {
    const random = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz';
    const length = 11;
    let resi = '';
  
    for (let i = 0; i < length; i++) {
      let result = Math.floor(Math.random() * random.length);
      resi += random.substring(result, result+1);
    }
  
    $('#nomor_resi').val(resi);
  }
})