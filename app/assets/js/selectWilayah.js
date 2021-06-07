$('.js-data-example-ajax').select2({
  placeholder: 'Masukan nama provinsi',
  selectOnClose: false,
  tags: false,
  tokenSeparators: [',', ' '],
  ajax: {
    url: '../../data/dataWilayah.json',
    dataType: 'json'
    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
  }
});