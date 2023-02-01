<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Performance | C-Technology</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php include 'assets/assets.php' ?>
  <?php include 'partials/sidebar.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Karyawan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <?php
        include 'inc/koneksi.php';
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "select * from tb_performance where id='$id'");
        while ($data = mysqli_fetch_array($query)) {
          ?>
          <form method="post" action="action/update_dailyperformance.php">
            <div class="card-body">
              <div class="form-group">
                <label>NIK</label>
                <select class="form-control" name="nik" style="width: 100%;">

                  <option value="<?= $data['nik']; ?>"><?php echo $data['nik']; ?></option>

                </select>
              </div>
              <label>Day</label>
              <div class="input-group"></div>

              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
              </div>
              <input type="text" class="form-control" data-inputmask-alias="datetime" name="day"
                data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?php echo $data['day']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputworktime">ID</label>
              <input type="id" class="form-control" id="exampleInputid" placeholder="id" name="id"
                value="<?php echo $data['id']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputworktime">worktime</label>
              <input type="worktime" class="form-control" id="exampleInputworktime" placeholder="worktime" name="worktime"
                value="<?php echo $data['worktime']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputovertime">overtime</label>
              <input type="overtime" class="form-control" id="exampleInputovertime" placeholder="overtime"
                value="<?php echo $data['overtime']; ?>" name="overtime">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" onClick="window.location.href='karyawan.php';" class="btn btn-primary">Back</button>
            </div>
          </form>

        </div>
      <?php
        }
        ?>

      <script>
        $(function () {
          //Datemask dd/mm/yyyy
          $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
          //Datemask2 mm/dd/yyyy
          $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
          $('[data-mask]').inputmask()

          //Date picker
          $('#reservationdate').datetimepicker({
            format: 'L'
          });

          //Date and time picker
          $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

          //Date range picker
          $('#reservation').daterangepicker()
          //Date range picker with time picker
          $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
              format: 'MM/DD/YYYY hh:mm A'
            }
          })
          //Date range as a button
          $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
            function (start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
          )

          //Timepicker
          $('#timepicker').datetimepicker({
            format: 'LT'
          })

          //Bootstrap Duallistbox
          $('.duallistbox').bootstrapDualListbox()

          //Colorpicker
          $('.my-colorpicker1').colorpicker()
          //color picker with addon
          $('.my-colorpicker2').colorpicker()

          $('.my-colorpicker2').on('colorpickerChange', function (event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
          })

          $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
          })

        })
      </script>
</body>

</html>