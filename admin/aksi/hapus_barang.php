<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from barang where id='$id'");


 
// mengalihkan halaman kembali ke index.php
  echo
  "<script>
  alert('Data Berhasil Terhapus');
  document.location.href = '../daftar_barang.php';
  </script>
  ";
 

?>