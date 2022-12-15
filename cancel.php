<?php 
   include('koneksi.php');
   session_start();

   $no_reservasi = $_GET['no_reservasi'];
   $cancel = mysqli_query($conn, "DELETE FROM reservasi WHERE no_reservasi = '".$no_reservasi."'");
   if($cancel){
      echo "<script>
      alert('jadwal berhasil dibatalkan');
      window.location = 'activity.php';
      </script>";

   }
?>