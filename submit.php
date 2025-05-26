<?php
		include 'koneksi.php';

      $id_barang = $_POST['id_barang'];
      $nama_peminjam = $_POST['nama_peminjam'];
      $nim = $_POST['nim'];
      $no_hp = $_POST['no_hp'];
      $mata_kuliah = $_POST['mata_kuliah'];
      $ruang_kuliah = $_POST['ruang_kuliah'];
      $dosen_pengampu = $_POST['dosen_pengampu'];
      $jam_mulai_mk = $_POST['jam_mulai_mk'];
      $jam_mulai = date("H:i:s", strtotime($jam_mulai_mk)); 
      $jam_selesai_mk = $_POST['jam_selesai_mk'];
      $jam_selesai = date("H:i:s", strtotime($jam_selesai_mk)); 
      $status_ketersediaan = "Sedang Dipinjam";
      $tgl_pinjam = date('Y-m-d');
			$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
			$nama = $_FILES['file']['name']; 
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 5044070){
					move_uploaded_file($file_tmp, 'admin/foto-identitas/'.$nama);
					$query = mysqli_query($koneksi,"INSERT INTO peminjaman(id_barang, nama_peminjam, nim,no_hp, foto_identitas, mata_kuliah, ruang_kuliah, dosen_pengampu, jam_mulai_mk, jam_selesai_mk, tgl_pinjam, status_ketersediaan)
               VALUES('$id_barang', '$nama_peminjam', '$nim','$no_hp', '$nama', '$mata_kuliah', '$ruang_kuliah', '$dosen_pengampu', '$jam_mulai', '$jam_selesai', '$tgl_pinjam', '$status_ketersediaan')");
					if($query){
            echo
            "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'form-peminjaman.php';
            </script>
            ";
					}else {
                  echo "Gagal insert: " . mysqli_error($koneksi);
               }
               }}
		
		
?>