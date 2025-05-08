<?php
include '../../koneksi.php';
$id = $_POST['id'];

$status_ketersediaan = $_POST['status_ketersediaan'];
$tgl_balik = date('Y-m-d');

// update data ke database
$query=mysqli_query($koneksi,"update peminjaman set status_ketersediaan='$status_ketersediaan',tgl_balik = '$tgl_balik' where id='$id'");
 
//mengalihkan ke halaman daftar peminjaman
if ($query) {
    echo
"<script>
alert('Data Berhasil Terupdate');
document.location.href = '../daftar_peminjaman.php';
</script>
";
}else{
    echo "Update gagal: " . mysqli_error($koneksi);
}

?>


