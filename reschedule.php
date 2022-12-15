<?php
require('koneksi.php');
session_start();
if (!isset($_SESSION['user'])) {
   echo "<script>window.location = 'login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

   <!-- title -->
   <title>Reschedule</title>

   <!-- favicon -->
   <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
   <!-- google font -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <!-- fontawesome -->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!-- bootstrap -->
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
   <!-- owl carousel -->
   <link rel="stylesheet" href="assets/css/owl.carousel.css">
   <!-- magnific popup -->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!-- animate css -->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!-- mean menu css -->
   <link rel="stylesheet" href="assets/css/meanmenu.min.css">
   <!-- main style -->
   <link rel="stylesheet" href="assets/css/main.css">
   <!-- responsive -->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <style>
      label {
         margin-bottom: 0;
         margin-top: 8px;
         font-weight: bold;
         color: darkslategray;
      }

      textarea {
         border: none;
      }
   </style>
</head>

<body>

   <!--PreLoader-->

   <!--PreLoader Ends-->

   <!-- header -->
   <div class="area-atas" id="sticker">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
               <div class="main-menu-wrap">
                  <!-- logo -->
                  <div class="site-logo">
                     <a href="index.php">
                        <img src="imagefrom/Logo.png" alt="" width="80 px">
                     </a>
                  </div>
                  <!-- logo -->

                  <!-- menu start -->
                  <nav class="main-menu">
                     <ul>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="activity.php">Activity</a>
                        </li>
                        <li><a href="#about">About</a>
                        </li>
                        <li><a href="contact.php">Contact</a>
                        </li>
                        <?php
                        if (isset($_SESSION['user'])) {
                        ?>
                           <li><a href="logout.php">logout</a></li>
                           <li>
                              <a href="profile.php" class="mainmenubtn"><?php echo $_SESSION['user']['nama_lengkap'] ?> <img src="icons/person-circle.svg" alt="Profil" style="width: 25px; color:white;"></a>
                           </li>
                        <?php
                        } else {
                        ?>
                           <li><a href="login.php">Login</a></li>
                        <?php
                        }
                        ?>
                     </ul>
                  </nav>
                  <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                  <div class="mobile-menu"></div>
                  <!-- menu end -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end header -->
   <!-- products -->
   <div class="product-section mt-150 mb-150">
      <div class="container">
         <div class="row product-lists">
            <div class="col-lg-6 col-md-6">
               <div class="single-product-item">
                  <div class="product-image text-center">
                     <img src="imagefrom/reservasi.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="single-product-item">
                  <div class="pt-5">
                     <h3 class="text-center">Reschedule Jadwal</h3>
                     <br>
                     <?php
                     $no_reservasi = $_GET['no_reservasi'];
                     $jadwal = mysqli_query($conn, "SELECT * FROM reservasi WHERE no_reservasi = '$no_reservasi'");
                     $row = mysqli_fetch_array($jadwal);
                     ?>
                     <form action="" method="post" class="">
                        <div class="col-md-12">
                           <input type="hidden" name="no_reservasi" value="<?php echo $row['no_reservasi'] ?>">
                           <input type="hidden" name="id_user" value="<?php echo $row['id_user'] ?>">

                           <label for="">Nama Lengkap</label>
                           <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'] ?>" readonly>
                           <label for="">Instansi</label>
                           <input type="text" name="instansi" value="<?php echo $row['instansi'] ?>" class="form-control" readonly>
                           <label for="">Kota</label>
                           <input type="text" name="kota" value="<?php echo $row['kota'] ?>" class="form-control" readonly>
                           <label for="">Email</label>
                           <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control" readonly>
                           <label for="">Nomor Telepon</label>
                           <input type="text" name="no_telpon" value="<?php echo $row['no_hp'] ?>" class="form-control" readonly>
                           <label for="">Keperluan</label>
                           <input type="text" name="keperluan" value="<?php echo $row['keperluan'] ?>" class="form-control" required>
                           <label for="">Tanggal</label>
                           <input type="date" name="tanggal" value="<?php echo $row['tanggal'] ?>" class="form-control" required>
                           <label for="">Jam</label>
                           <input type="time" name="jam" value="<?php echo $row['jam'] ?>" class="form-control" required>
                           <div class="mt-4">
                              <button name="submit" class="btn btn-primary form-control" type="submit">Apply</button>
                           </div>
                        </div>

                     </form>
                     <?php
                     if (isset($_POST['submit'])) {
                        $keperluan = $_POST['keperluan'];
                        $tanggal = $_POST['tanggal'];
                        $jam = $_POST['jam'];
                        $no_reservasi = $_POST['no_reservasi'];

                        $cek_reservasi = mysqli_query($conn, "SELECT * FROM reservasi WHERE tanggal = '$tanggal'");
                        if (mysqli_num_rows($cek_reservasi) == 1) {
                           echo "
            <script>
            alert('reschedule ke tanggal " . $tanggal . " telah terisi mohon ganti tanggal lain');
            
            </script>";
                        } else {
                           $set_user = mysqli_query($conn, "UPDATE reservasi SET
               keperluan = '$keperluan',
               tanggal = '$tanggal',
               jam = '$jam' WHERE no_reservasi = '$no_reservasi'
            ");
                           if ($set_user) {
                              echo "<script>
               alert('reschedule berhasil');
               window.location='activity.php';
               </script>";
                           } else {
                              echo "<script>alert('reschedule jadwal gagal')</script>";
                           }
                        }
                     }
                     ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end products -->

   <!-- logo carousel -->
   <!-- end logo carousel -->

   <!-- footer -->
   <div class="footer-area">
      <div class="container">
         <div class="row text-center align-items-center">
            <div class="col-lg-8 col-md-6" style="margin: 0 auto;">
               <div class="footer-box about-widget">
                  <h2 class="widget-title">About us</h2>
                  <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end footer -->

   <!-- copyright -->
   <div id="about" class="copyright">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <p>Copyrights &copy; 2022 - Guest<br>
               </p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
               <div class="social-icons">
                  <ul>
                     <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                     <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end copyright -->

   <!-- jquery -->
   <script src="assets/js/jquery-1.11.3.min.js"></script>
   <!-- bootstrap -->
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <!-- count down -->
   <script src="assets/js/jquery.countdown.js"></script>
   <!-- isotope -->
   <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
   <!-- waypoints -->
   <script src="assets/js/waypoints.js"></script>
   <!-- owl carousel -->
   <script src="assets/js/owl.carousel.min.js"></script>
   <!-- magnific popup -->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!-- mean menu -->
   <script src="assets/js/jquery.meanmenu.min.js"></script>
   <!-- sticker js -->
   <script src="assets/js/sticker.js"></script>
   <!-- main js -->
   <script src="assets/js/main.js"></script>

</body>

</html>