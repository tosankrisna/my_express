function confirmDeleteCs(id_cs, id_alamat) {
  Swal.fire({
    title: 'Yakin ingin menghapus data?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus',
    cancelButtonText: 'Batal',  
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = `../../../controllers/customerServiceController.php?aksi=hapus&id_cs=${id_cs}&id_alamat=${id_alamat}`
    }
  })
}

function confirmDeleteKurir(id_kurir, id_alamat, id_kendaraan) {
  Swal.fire({
    title: 'Yakin ingin menghapus data?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus',
    cancelButtonText: 'Batal',  
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = `../../../controllers/kurirController.php?aksi=hapus&id_kurir=${id_kurir}&id_alamat=${id_alamat}&id_kendaraan=${id_kendaraan}`
    }
  })
}

function confirmDeletePaket(id_paket, id_alamat_pengirim, id_pengirim, id_penerima, id_alamat_penerima, id_tracking, page = 'paket') {
  Swal.fire({
    title: 'Yakin ingin menghapus data?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus',
    cancelButtonText: 'Batal',  
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = `../../../controllers/paketController.php?aksi=hapus&id_paket=${id_paket}&id_alamat_pengirim=${id_alamat_pengirim}&id_pengirim=${id_pengirim}&id_penerima=${id_penerima}&id_alamat_penerima=${id_alamat_penerima}&id_tracking=${id_tracking}&page=${page}`
    }
  })
}

function confirmDeleteHistory(id_paket, id_alamat_pengirim, id_pengirim, id_penerima, id_alamat_penerima, id_tracking, page = 'history') {
  Swal.fire({
    title: 'Yakin ingin menghapus data?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus',
    cancelButtonText: 'Batal',  
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = `../../../controllers/paketController.php?aksi=hapus&id_paket=${id_paket}&id_alamat_pengirim=${id_alamat_pengirim}&id_pengirim=${id_pengirim}&id_penerima=${id_penerima}&id_alamat_penerima=${id_alamat_penerima}&id_tracking=${id_tracking}&page=${page}`
    }
  })
}