<?php 
include '../inc/koneksi.php';

// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$day = $_POST['day'];
$worktime = $_POST['worktime'];
$overtime = $_POST['overtime'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_performance values('','$nik','$day','$worktime','$overtime')");
 
header("location:../dailyperformance.php");
?>