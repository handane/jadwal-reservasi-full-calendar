<?php
include "koneksi.php";
$tampil = mysqli_query($conn, "SELECT * FROM reservasi WHERE status = 'Aktif' ORDER BY id");
$dataArr = array();
while ($data = mysqli_fetch_array($tampil)) {
   $dataArr[] = array(
      'id' => $data['id'],
      'title' => $data['keperluan'],
      'start' => $data['tanggal'],
      // 'end' => $data['tanggal'],
   );
}
   echo json_encode($dataArr);
   ?>