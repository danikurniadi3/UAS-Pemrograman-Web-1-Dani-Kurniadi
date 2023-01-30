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
            <h1>Data Daily Performance</h1>
            <button type="button" class="btn btn-block btn-outline-success" style="width: 120px; margin-top:13px;">Tambah Data</button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>Hari</th>
                    <th>Waktu Kerja</th>
                    <th>Lembur</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php include 'inc/koneksi.php';
                  $no = 1;
                  $query = mysqli_query($koneksi, 'SELECT * FROM tb_performance');
                  while ($data = mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                  <td><?php echo $no++?></td>
                    <td><?php echo $data['nik']?></td>
                    <td><?php echo $data['day']?></td>
                    <td><?php echo $data['worktime']?></td>
                    <td><?php echo $data['overtime']?></td>
                    <td><a href="action/delete_karyawan.php?nik=<?php echo $data['nik']; ?>">HAPUS</a></td>
                    
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>NIK</th>
                    <th>Hari</th>
                    <th>Waktu Kerja</th>
                    <th>Lembur</th>
                    <th>aksi</th>
                  </tr>
                
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php include 'partials/footer.php'?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>