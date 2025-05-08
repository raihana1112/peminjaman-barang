<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$merk_barang = $_POST['merk_barang'];
$kondisi_barang = $_POST['kondisi_barang'];
    
// update data ke database
$query=mysqli_query($koneksi,"update barang set nama_barang='$nama_barang', jenis_barang='$jenis_barang', 
merk_barang='$merk_barang',kondisi_barang='$kondisi_barang' where id_barang='$id_barang'");
 
// mengalihkan halaman kembali ke index.php
// mengalihkan halaman kembali ke index.php
if ($query) {
    echo
"<script>
alert('Data Berhasil Terupdate');
document.location.href = '../daftar_barang.php';
</script>
";
}else{
    echo "Update gagal: " . mysqli_error($koneksi);
}
 
?>