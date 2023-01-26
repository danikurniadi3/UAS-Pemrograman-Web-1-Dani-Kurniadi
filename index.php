<!DOCTYPE html>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Performance | C-Technology</title> 
</head>
<body class = "hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include "assets/assets.php"; ?>
<?php include "partials/sidebar.php"; ?> 
<?php include "partials/content.php"; ?>
<?php include "partials/footer.php"; ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<!-- /.control-sidebar -->
</div>

</body>
</html>