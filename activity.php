<?php
require('koneksi.php');
session_start();
if (!isset($_SESSION['user'])) {
   
   echo "<script>
   alert('silahkan login terlebih dahulu');
   window.location = 'login.php'</script>";
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
   <title>Activity</title>

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

      .th-1 th {
         width: 100px;
      }

      .th-2 th {
         width: 60px;
      }

      td {
         padding-left: 8px;
      }

      table {
         margin-right: 40px;
      }

      .box-shadow {
         box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      }

      .box-shadow:hover {
         box-shadow: none;
         /* cursor: pointer; */
      }

      .img-1 {
         width: 50px;
      }

      .img-1:hover {
         width: 54px;
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
   <div class="product-section mt-100 mb-150">
      <div class="container">
         <h5 style="color: skyblue;">Activity</h5>
         <div class="card">
            <div class="card-header">Activity</div>
            <div class="card-body">
               <?php
               $data_reservasi = mysqli_query($conn, "SELECT * FROM reservasi WHERE id_user = '" . $_SESSION['user']['id'] . "'");
               if (mysqli_num_rows($data_reservasi) > 0) {
                  while ($row = mysqli_fetch_array($data_reservasi)) {
               ?>

                     <div class="card mb-3 box-shadow">
                        <div class="card-body col-md-12 row">
                           <div class="col-md-1">
                              <a href="detail.php?id=<?php echo $row['no_reservasi'] ?>">
                                 <img src="imagefrom/Pic_1 - Copy.png" alt="image" class="img-1">
                              </a>
                           </div>
                           <div class="col-md-11">
                              <div class="row">
                                 <table class="col-md-4 th-1">
                                    <tr>
                                       <th>No. Reservasi</th>
                                       <!-- <th>:</th> -->
                                       <td><?php echo $row['no_reservasi'] ?></td>
                                    </tr>
                                    <tr>
                                       <th>Nama</th>
                                       <!-- <th>:</th> -->
                                       <td><?php echo $row['nama_lengkap'] ?></td>
                                    </tr>
                                    <tr>
                                       <th>Status</th>
                                       <!-- <th>:</th> -->
                                       <td><i><?php echo $row['status'] ?></i></td>
                                    </tr>
                                 </table>
                                 <table class="col-md-3 th-2">
                                    <tr>
                                       <th>Tanggal</th>
                                       <!-- <th>:</th> -->
                                       <td><?php echo $row['tanggal'] ?></td>
                                    </tr>
                                    <tr>
                                       <th>Jam</th>
                                       <!-- <th>:</th> -->
                                       <td><?php echo $row['jam'] ?></td>
                                    </tr>
                                 </table>
                                 <div class="col-md-4 row">
                                    <a href="reschedule.php?no_reservasi=<?php echo $row['no_reservasi']; ?>" class="btn btn-success pt-4 mr-1"><b>Reschedule</b></a>
                                    <a href="cancel.php?no_reservasi=<?php echo $row['no_reservasi']; ?>" class="btn btn-danger pt-4 mr-1" onclick="return confirm('apakah anda yakin ingin membatalkan jadwal?')"><b>Cancel</b> </a>
                                    <a href="detail.php?no_reservasi=<?php echo $row['no_reservasi'] ?>" class="btn btn-primary pt-4"><img src="imagefrom/eye-fill.svg" alt=""></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               <?php }
               } ?>
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
   <div class="copyright">
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