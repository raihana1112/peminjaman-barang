<?php
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "select * from barang");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Informasi Peminjaman Proyektor dan Kunci Ruangan</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="images/logo-uin.png" class="navbar-brand-image">
                        <span class="navbar-brand-text d-lg-inline d-none">
                            SI - Peminjaman Proyektor dan Kunci Ruangan
                            <small>Prodi Teknologi Informasi FST UIN Ar-Raniry</small>
                        </span>
                        
                        <span class="navbar-brand-text-short d-inline d-lg-none">
                            Prodi TI FST <br> UIN Ar-Raniry
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" href="form-peminjaman.php" role="button" aria-controls="offcanvasExample">Form Peminjaman</a>
                    </div> 
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="barang.php">Ketersediaan Barang</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php#section_5">Contact Us</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" href="#" role="button" aria-controls="offcanvasExample">Form Peminjaman</a>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">

                            <h1 class="text-white mb-4 pb-2">Form Peminjaman Proyektor dan Kunci Ruangan Lab</h1>

                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Isi Form Peminjaman</a>
                        </div>

                    </div>
                </div>

                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>


            <section class="events-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-5 mb-4">Form Peminjaman</h2> <br>
                        </div>

                        <div class="form-wrapper">
                            <div class="form-container">
                                <h4>Silahkan mengisi formulir berikut ini!</h4> <br>
                                <form class="custom-form member-login-form" action="submit.php" method="post" role="form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="nama_peminjam">Nama Lengkap *</label>
                                            <input type="text" name="nama_peminjam" class="form-control" placeholder="Isikan nama lengkapmu..." required>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="nim">NIM *</label>
                                            <input type="text" name="nim" class="form-control" placeholder="Isikan NIM kamu..." required>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="nama_barang">Barang yang akan dipinjam *</label>
                                            <select name="id_barang" class="form-control" placeholder="pilihan barang">
                                                <option selected> Pilihan Barang...</option>
                                            <?php
                                            
                                            if ($query->num_rows > 0) {
                                                // Mengoutput data setiap baris
                                                while($row = $query->fetch_assoc()) {
                                                    echo '<option value="'.$row["id_barang"].'">'.$row["nama_barang"]." | ". $row["jenis_barang"]. " | ". $row["merk_barang"]. " | ". $row["kondisi_barang"].'</option>';
                                                }
                                            }
                                            ?>
                                            </select>
                                        
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="no_hp">No.Hp / No.WA *</label>
                                            <input type="text" name="no_hp" class="form-control" placeholder="Isikan no.hp atau no.wa kamu..." required>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="kartu_identitas">Foto KTM / KTP *</label>
            
                                            <input type="file" name="file" class="form-control" required>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="mata_kuliah">Mata Kuliah *</label>
            
                                            <input type="text" name="mata_kuliah" class="form-control" placeholder="Isikan Mata Kuliahmu..." required>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="ruang_kuliah">Ruang Kuliah *</label>
            
                                            <input type="text" name="ruang_kuliah" class="form-control" placeholder="Isikan nomor ruang kuliah..." required>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="dosen_pengampu">Dosen Pengampu *</label>
            
                                            <input type="text" name="dosen_pengampu" class="form-control" placeholder="Isikan Dosen Pengampu Kuliah..." required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="jam_mulai_mk">Jam Mulai *</label>
            
                                            <input type="time" name="jam_mulai_mk" class="form-control" placeholder="Isikan Jam Mulai Kuliah..." required>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label class="form-label mb-2" for="jam_selesai_mk">Jam Selesai *</label>
            
                                            <input type="time" name="jam_selesai_mk" class="form-control" placeholder="Isikan Jam Selesai Kuliah..." required>
                                        </div>
                                
                                    </div>
                                        <div class="form-check mb-4">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Pastikan Data Anda Sudah Benar dan Lengkap semua
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                        </div>
            
                                        <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                            <button type="submit" class="form-control">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
            
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-footer py-4">
            <div class="container text-center">
              <p class="mb-0">© 2025 Prodi Teknologi Informasi - FST UIN Ar-Raniry. All rights reserved.</p>
            </div>
          </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
