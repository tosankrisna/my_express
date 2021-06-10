$(document).ready(function() {
  let total;

  $('#berat_paket, #jenis_packing, #layanan').on('keyup change',() => {
    if ( $('#jenis_packing').val() === 'bubble wrap' && $('#layanan').val() === 'regular' ) {

      // harga packing + harga layanan + (harga perkilo * berat paket)
      this.total = 2500 + 15000 + (7500 * parseFloat( $('#berat_paket').val()) )
      $('input#total_bayar').val(this.total) 
    } else if ( $('#jenis_packing').val() === 'bubble wrap' && $('#layanan').val() === 'ekonomi' ) {

      // harga packing + harga layanan + (harga perkilo * berat paket)
      this.total = 2500 + 10000 + (7500 * parseFloat( $('#berat_paket').val()) )
      $('input#total_bayar').val(this.total) 
    } else if ( $('#jenis_packing').val() === 'bubble wrap' && $('#layanan').val() === 'super kilat' ) {

      // harga packing + harga layanan + (harga perkilo * berat paket)
      this.total = 2500 + 20000 + (7500 * parseFloat( $('#berat_paket').val()) )
      $('input#total_bayar').val(this.total) 
    } else if ( $('#jenis_packing').val() === 'kayu' && $('#layanan').val() === 'regular' ) {

      // harga packing + harga layanan + (harga perkilo * berat paket)
      this.total = 25000 + 15000 + (7500 * parseFloat( $('#berat_paket').val()) )
      $('input#total_bayar').val(this.total) 
    } else if ( $('#jenis_packing').val() === 'kayu' && $('#layanan').val() === 'ekonomi' ) {

      // harga packing + harga layanan + (harga perkilo * berat paket)
      this.total = 25000 + 10000 + (7500 * parseFloat( $('#berat_paket').val()) )
      $('input#total_bayar').val(this.total) 
    } else if ( $('#jenis_packing').val() === 'kayu' && $('#layanan').val() === 'super kilat' ) {
      
      // harga packing + harga layanan + (harga perkilo * berat paket)
      this.total = 25000 + 20000 + (7500 * parseFloat( $('#berat_paket').val()) )
      $('input#total_bayar').val(this.total) 
    }
  })
})