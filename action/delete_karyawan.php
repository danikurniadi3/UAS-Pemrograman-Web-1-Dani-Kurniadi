<?php 
// koneksi database
include '../inc/koneksi.php';
 
// menangkap data id yang di kirim dari url
$nik = $_GET['nik'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_karyawan where nik='$nik'");
 
// mengalihkan halaman kembali ke index.php
header("location:../karyawan.php");
 
?>