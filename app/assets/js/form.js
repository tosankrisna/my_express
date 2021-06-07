$(document).ready(function() {
  $('#form input').attr('value', function() {
    return this.value;
  });

  $('#form').validate({
    errorClass: 'error-validate',
    rules: {
      username: {
        required: true
      },
      password: {
        required: true
      }
    },
    messages: {
      username: 'Username tidak boleh kosong!',
      password: 'Password tidak boleh kosong!',
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
})