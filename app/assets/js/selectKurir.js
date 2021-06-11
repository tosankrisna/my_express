$(document).ready(function() {
  $('#select_kurir').select2({
    ajax: { 
      url: "../../../controllers/select2Controller.php",
      type: "POST",
      dataType: 'JSON',
      delay: 250,
      data: function (params) {
       return {
         searchTerm: params.term // search term
       };
      },
      processResults: function (response) {
        return {
           results: response
        };
      },
      cache: true
     }
  })
})