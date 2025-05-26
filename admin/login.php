<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Informasi Peminjaman Proyektor dan Kunci Ruangan</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="../https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/bootstrap-icons.css" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet">
        

    </head>
    
    <body>

        <main>
        <div style="height: 100vh; display: flex; justify-content: center; align-items: center;">
            <div class="offcanvas offcanvas-center" style="visibility: visible; position: static;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Admin Login</h5>
                
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="" method="post" role="form">

                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="username">Username</label>

                                <input type="text" name="username" class="form-control" placeholder="username anda" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="password">Password</label>

                                <input type="password" name="password" class="form-control" placeholder="password" required>
                            </div>

                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" name="submit" class="form-control">Login</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        include '../koneksi.php';
                        if(isset($_POST['submit'])){ // Check if form was submitted

                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            
                            // menyeleksi data admin dengan username dan password yang sesuai
                            $data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
                            
                            // menghitung jumlah data yang ditemukan
                            $cek = mysqli_num_rows($data);
                            
                            if($cek > 0){
                                $_SESSION['username'] = $username;
                                $_SESSION['status'] = "login";
                                echo
                                "<script>
                                        alert('Anda Berhasil Login');
                                        document.location.href = 'index.php';
                                        </script>
                                        ";
                            }else{
                                echo
                                "<script>
                                        alert('Username atau Password Anda Salah');
                                        document.location.href = 'login.php';
                                        </script>
                                        ";
                            }
                        }
                    ?>
                    

                    <br><br>

                    <div class="mt-auto mb-5">
                        <p>
                            <strong class="text-white me-2">Any Questions?</strong> 
                            <a href="#" class="contact-link">Teknisi Prodi</a>
                        </p>
                    </div>
                </div>

                
            </div>
            

    


        </div>
    
        </main>


        <!-- JAVASCRIPT FILES -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="../js/click-scroll.js"></script>
        <script src="../js/animated-headline.js"></script>
        <script src="../js/modernizr.js"></script>
        <script src="../js/custom.js"></script>

    </body>
</html>