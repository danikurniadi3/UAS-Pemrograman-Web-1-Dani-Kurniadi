<?php 
// koneksi database
include '../inc/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nik = $_POST['nik'];
$day = $_POST['day'];
$worktime = $_POST['worktime'];
$overtime = $_POST['overtime'];
 
// update data ke database
mysqli_query($koneksi,"update tb_performance set nik='$nik', day='$day', worktime='$worktime', overtime='$overtime' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../dailyperformance.php");
 
?>