<?php 
// koneksi database
include '../inc/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set username='$username', password='$password'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin.php");
 
?>