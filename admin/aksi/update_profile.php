<?php

                    include '../../koneksi.php';
                    
                    $id = $_POST['id'];
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $no_hp = $_POST['no_hp'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // update data ke database
                    $query = mysqli_query($koneksi,"update admin set username='$username',password='$password', nama_lengkap='$nama_lengkap',email='$email',no_hp='$no_hp' where id='$id'");
                    
                    // mengalihkan halaman kembali ke index.php
                    if ($query) {
                        echo
                    "<script>
                    alert('Data Berhasil Terupdate');
                    document.location.href = '../settings.php';
                    </script>
                    ";
                    }else{
                        echo "Update gagal: " . mysqli_error($koneksi);
                    }
            
                    ?>