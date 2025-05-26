<?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select p.*, b.nama_barang from peminjaman as p inner join barang as b on p.id_barang=b.id_barang where id='$id'");
    $status_options = ["Sedang Dipinjam", "Sudah Dikembalikan"];
    while ($d = mysqli_fetch_assoc($data)) {

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon  ">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Page</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
    
            <br><br>
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Dashboard</span>
                </a>
                
            </li>

            <li class="nav-item">
                <a class="nav-link" href="settings.php">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Profile Settings</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link" href="daftar_barang.php">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Proyektor & Kunci Ruangan</span>
                </a>
                
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="daftar_peminjaman.php">
                    <i class="fas fa-fw fa-book-reader"></i>
                    <span>Daftar Peminjaman</span>
                </a>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Peminjaman Proyektor dan Kunci Ruangan</h1>
                    
                    </div>

                    <div class="row">

                        <div class="col-lg-10">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Update Data Peminjaman Proyektor dan Kunci Ruangan</h6>
                                </div>
                                <div class="card-body">
                                    <form action="aksi/edit_data.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                                        <div class="row">
                                        <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="nama_barang">Nama Barang</label>
                                                <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>" class="form-control" disabled>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="nama_peminjam">Nama Peminjam</label>
                                                <input type="text" name="nama_peminjam" value="<?php echo $d['nama_peminjam']; ?>" class="form-control" disabled>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="nim">NIM</label>
                                                <input type="text" name="nim" value="<?php echo $d['nim']; ?>" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="foto_identitas">Foto KTP / KTM</label>
                                                <img src="foto-identitas/<?= $d['foto_identitas'] ?>" alt="foto tidak ditemukan" style="width: 300px;">
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="no_hp">No.HP/No.WA</label>
                                                <input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>" class="form-control" disabled>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="mata_kuliah">Mata Kuliah</label>
                                                <input type="text" name="mata_kuliah" value="<?php echo $d['mata_kuliah']; ?>" class="form-control" disabled>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="ruang_kuliah">Ruang Kuliah</label>
                                                <input type="text" name="ruang_kuliah" value="<?php echo $d['ruang_kuliah']; ?>" class="form-control" disabled>
                                                
                                            </div>

                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="dosen_pengampu">Dosen Pengampu</label>
                                                <input type="text" name="dosen_pengampu" value="<?php echo $d['dosen_pengampu']; ?>" class="form-control" disabled>
                                            </div>
                                        
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="jam_mulai_mk">Jam Mulai MK</label>
                                                <input type="text" name="jam_mulai_mk" value="<?php echo $d['jam_mulai_mk']; ?>" class="form-control" disabled>
                                            </div>
                                        
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="jam_selesai_mk">Jam Selesai MK</label>
                                                <input type="text" name="jam_selesai_mk" value="<?php echo $d['jam_selesai_mk']; ?>" class="form-control" disabled>
                                            </div>
                                        
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="tgl_pinjam">Tanggal Pinjam</label>
                                                <input type="text" name="tgl_pinjam" value="<?php echo $d['tgl_pinjam']; ?>" class="form-control" disabled>
                                            </div>
                                            
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label mb-2" for="status_ketersediaan">Status Peminjaman *</label>
                                                <select name="status_ketersediaan" class="form-control" autofocus required>
                                                <?php foreach ($status_options as $option): ?>
                                                    <option value="<?= $option ?>" <?= (isset($d['status_ketersediaan']) && $d['status_ketersediaan'] == $option) ? 'selected' : '' ?>>
                                                    <?= $option ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                            </div>
                                        </div>

                                        <?php
                                                        
                                        }
                                        ?>

                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <button type="submit" class="btn btn-primary">Update Data</button>
                                            </div>
                                        </div>
                                    
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                    <?php

                    include '../koneksi.php';
                    if(isset($_POST['submit'])){ // Check if form was submitted
                    // menangkap data yang di kirim dari form
                    $id = $_POST['id'];
                    $nama_barang = $_POST['nama_barang'];
                    $jenis_barang = $_POST['jenis_barang'];
                    $merk_barang = $_POST['merk_barang'];
                    $kondisi_barang = $_POST['kondisi_barang'];

                    // update data ke database
                    $query = "update admin set nama_barang='$nama_barang',jenis_barang='$jenis_barang',merk_barang='$merk_barang',kondisi_barang='$kondisi_barang' where id='$id'";
                    $hasil_update = mysqli_query($koneksi, $query);
                                        
                
                    if ($hasil_update) {
                        echo
                    "<script>
                    alert('Data Berhasil Terupdate');
                    document.location.href = 'settings.php';
                    </script>
                    ";
                    }else{
                        echo "Update gagal: " . mysqli_error($koneksi);
                    }
                    
                        }
                    ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        © 2025 Prodi Teknologi Informasi - FST UIN Ar-Raniry. All rights reserved.
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>