<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_barang = $_GET['id_barang'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from barang where id_barang='$id_barang'");


 
// mengalihkan halaman kembali ke index.php
  echo
  "<script>
  alert('Data Berhasil Terhapus');
  document.location.href = '../daftar_barang.php';
  </script>
  ";
 

?>