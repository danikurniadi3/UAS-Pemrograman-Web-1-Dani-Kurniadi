<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Performance | C-Technology</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php include 'assets/assets.php'?>
  <?php include 'partials/sidebar.php'?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Karyawan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="action/add_karyawan.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputnik">NIK</label>
                    <input type="number" class="form-control" id="exampleInputnik" placeholder="nik" name="nik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputname">Nama Lengkap</label>
                    <input type="name" class="form-control" id="exampleInputname" placeholder="nama lengkap" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputposisi">Posisi</label>
                    <input type="posisi" class="form-control" id="exampleInputposisi" placeholder="Posisi" name ="posisi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtelepon">Telepon</label>
                    <input type="telepon" class="form-control" id="exampleInputtelepon" placeholder="No. Telepon" name ="telepon">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputemail">Email</label>
                    <input type="email" class="form-control" id="exampleInputemail" placeholder="Email" name="email">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" onClick="window.location.href='karyawan.php';" class="btn btn-primary">Back</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</body>
</html>