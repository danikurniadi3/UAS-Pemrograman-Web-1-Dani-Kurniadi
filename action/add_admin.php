<?php 
include '../inc/koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into admin values('','$username','$password')");
 
header("location:../admin.php");
?>