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
                                <a class="nav-link click-scroll" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="barang.php">Ketersediaan Barang</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" href="form-peminjaman.php" role="button" aria-controls="offcanvasExample">Form Peminjaman</a>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

                <div class="container">
                    <div class="row">
                        <div class="section-1">
                        <div class="d-flex justify-content-center align-items-center vh-100">
                            <div class="col-lg-12 col-12 mb-5 mb-lg-0 text-center">
                              <h2 class="text-white">Selamat Datang di </h2>
                              <h2 class="text-white">Sistem Informasi Peminjaman Proyektor dan Kunci Ruangan Lab</h2>
                              <h2 class="text-white">Prodi Teknologi Informasi FST UIN Ar-Raniry </h2> <br><br>
                              <div class="custom-btn-group">
                                <a href="form-peminjaman.php" class="btn custom-btn smoothscroll me-3">Isi Form Peminjaman</a>
                                <a href="barang.php" class="btn custom-btn smoothscroll me-3">Cek Ketersediaan Barang</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>


            <section class="about-section section-padding" id="section_2">
                    <div class="d-flex justify-content-center align-items-center vh-100">
                        <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-5 mb-4">About Prodi TI FST UIN Ar-Raniry</h2>
                            </div>
                    
                            <div class="col-lg-8 col-12">
                            <h3 class="mb-3">Prodi TI FST UIN Ar-Raniry</h3>
                    
                            <p> 
                                <strong>Program Studi Teknologi Informasi (TI)</strong> merupakan bagian dari Fakultas Sains dan Teknologi UIN Ar-Raniry Banda Aceh yang berfokus pada pengembangan ilmu pengetahuan dan teknologi di bidang sistem informasi, pemrograman, jaringan komputer, serta pengelolaan data dan teknologi berbasis digital.
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">
                        <!-- Kolom Kiri: Google Maps -->
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <h5 class="site-footer-title mb-4">Prodi TI FST UIN Ar-Raniry</h5>
                      
                            <p class="d-flex border-bottom pb-3 mb-2 me-lg-3">
                              <span class="me-2">Mon-Fri:</span>
                              8:00 AM - 6:00 PM
                            </p>
                        
                            <p class="d-flex me-lg-3">
                              <span class="me-2">Sat-Sun:</span>
                              Closed
                            </p>
                        
                            <strong>Kopelma Darussalam, Aceh</strong>
                        
                            <p class="mt-2 mb-1">
                              <a class="contact-link">
                                0821-3206-32999 <br> Admin Prodi
                              </a>
                            </p>
                        
                            <p class="mb-0">
                              <a href="mailto:fst.ti@ar-raniry.ac.id" class="contact-link">
                                fst.ti@ar-raniry.ac.id 
                              </a>
                            </p>
                            <br>
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>
                        </div>
                      
                        <!-- Kolom Kanan: Kontak -->
                        <div class="col-lg-8 col-12">                      
                            <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374.8332568394425!2d95.36928987699902!3d5.575531296903403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037b4482e1cf7%3A0xdf781786397a7df5!2sScience%20and%20Technology%20Faculty%20UIN%20Ar-Raniry!5e0!3m2!1sen!2sid!4v1745057366470!5m2!1sen!2sid" 
                            width="800" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                          </iframe>
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
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>