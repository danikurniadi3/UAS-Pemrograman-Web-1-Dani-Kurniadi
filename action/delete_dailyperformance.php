<?php 
// koneksi database
include '../inc/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_performance where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../dailyperformance.php");
 
?>