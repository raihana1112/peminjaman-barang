<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// Ambil nama file
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT foto_identitas FROM peminjaman WHERE id = '$id'"));
$foto_identitas = $data['foto_identitas'];

// Hapus file
if (!empty($foto_identitas) && file_exists("../foto-identitas/$foto_identitas")) {
    unlink("../foto-identitas/$foto_identitas");
}
 
// menghapus data dari database
mysqli_query($koneksi,"delete from peminjaman where id='$id'");


// mengalihkan halaman kembali ke index.php
  echo
  "<script>
  alert('Data Berhasil Terhapus');
  document.location.href = '../daftar_peminjaman.php';
  </script>
  ";
 

?>