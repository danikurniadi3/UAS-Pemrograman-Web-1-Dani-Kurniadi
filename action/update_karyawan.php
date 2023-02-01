<?php 
// koneksi database
include '../inc/koneksi.php';
 
// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
 
// update data ke database
mysqli_query($koneksi,"update tb_karyawan set nama='$nama', posisi='$posisi', telepon='$telepon', email='$email' where nik='$nik'");
 
// mengalihkan halaman kembali ke index.php
header("location:../karyawan.php");
 
?>