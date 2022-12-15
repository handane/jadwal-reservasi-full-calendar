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
   <title>Jadwal</title>

   <!-- favicon -->
   <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
   <!-- google font -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <!-- fontawesome -->

   <link rel="stylesheet" href="assets/fullcalendar.css">
   <link rel="stylesheet" href="assets/bootstrap.css">
   <link rel="stylesheet" href="styles/login.css">
   <link rel="stylesheet" href="styles/style.css">
   <script src="assets/jquery.min.js"></script>
   <script src="assets/jquery-ui.min.js"></script>
   <script src="assets/moment.min.js"></script>
   <script src="assets/fullcalendar.min.js"></script>
   
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
      #calendar {
         font-size: 15px;
         color: black;
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

   </div>
   <div class="product-section mt-5">
      <div class="container-fluid">
         <h4 style="color: skyblue;">Jadwal</h4>
         <div class="card">
            <div class="card-body">
               <div id="calendar">

               </div>
            </div>
         </div>
      </div>
      <!-- end products -->

      <!-- logo carousel -->
      <!-- end logo carousel -->

      <!-- footer -->
      <div class="footer-area mt-5">
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
      <script>
         $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({
               editable: true,
               header: {
                  left: 'pref, next today',
                  center: 'title',
                  right: 'month'
               },
               events: 'tampil.php',
               selectable: true,
               selecthelper: true,
            });
         });
      </script>
      <!-- jquery -->


</body>

</html>