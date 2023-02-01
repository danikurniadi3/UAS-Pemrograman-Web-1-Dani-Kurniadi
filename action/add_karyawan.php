<?php 
include '../inc/koneksi.php';

// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$name = $_POST['name'];
$posisi = $_POST['posisi'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_karyawan values('$nik','$name','$posisi','$telepon','$email')");
 
header("location:../karyawan.php");
?>