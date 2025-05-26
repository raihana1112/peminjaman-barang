<?php
	
    include '../../koneksi.php';

      $nama_barang = $_POST['nama_barang'];
      $jenis_barang = $_POST['jenis_barang'];
      $merk_barang = $_POST['merk_barang'];
      $kondisi_barang = $_POST['kondisi_barang'];

      $query = mysqli_query($koneksi, "insert into barang(nama_barang, jenis_barang, merk_barang, kondisi_barang) 
      values('$nama_barang','$jenis_barang','$merk_barang','$kondisi_barang')");

        if ($query) {
            echo
            "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = '../daftar_barang.php';
            </script>
            ";
			}else{
			echo
            "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href = '../daftar_barang.php';
            </script>
            ";
		}
                
        
        
            
		
		
?>