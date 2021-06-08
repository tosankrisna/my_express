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
      location.href = ` ../../../controllers/kurirController.php?aksi=hapus&id_kurir=${id_kurir}&id_alamat=${id_alamat}&id_kendaraan=${id_kendaraan}`
    }
  })
}