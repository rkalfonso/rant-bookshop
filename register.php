<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rant Bookshop | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="photo/logo-rant2.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="AdminLTE-3.0.0-rc.4/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css"> -->
  <!-- <link rel="stylesheet" href="css/select2.min.css"> -->
  <!-- <link rel="stylesheet" href="css/select2-bootstrap4.min.css"> -->
  <!-- iCheck -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/icheck-bootstrap.min.css"> -->
  <!-- JQVMap -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/jqvmap/jqvmap.min.css">
  <!-- <link rel="stylesheet" href="css/jqvmap.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- <link rel="stylesheet" href="css/dataTables.bootstrap4.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="/css/adminlte.min.css"> -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- <link rel="stylesheet" href="css/OverlayScrollbars.min.css"> -->
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/daterangepicker/daterangepicker.css">
  <!-- <link rel="stylesheet" href="css/daterangepicker.css"> -->
  <!-- summernote -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/summernote/summernote-bs4.css">
  <style>
  .logo {
    width: 90px;
    height: auto;
  }

  * {
    font-family: 'Ubuntu', sans-serif;
  }

  .card {
    width: 800px;
  }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="">
    <div class="login-logo">
      <a href="index.php"><img src="photo/logo-rant2.png" class="logo" alt="Rant Logo"></a>
      <br><a href="index.php"><b>Rant</b> Bookshop</a>
    </div>
    <!-- /.login-logo -->
    <form method="POST" action="insert-cx.php" enctype="multipart/form-data">
      <div class="card card-warning">
        <div class="card-header">
          <h5>Register</h5>
        </div>
        <div class="card-body">
          <!-- start of the newly added -->
          <div class="row">
            <div class="form-group col-sm-12" style="margin-bottom: 0;">
              <input type="hidden" name="memberid">
              <label for="exampleInputEmail1">Name</label>
            </div>
            <div class="form-group col-sm-5">
              <!-- <label for="exampleInputEmail1">Name</label> -->
              <input type="text" class="form-control" placeholder="First Name" name="fname" required>
            </div>
            <div class="form-group col-sm-2">
              <!-- <label for="exampleInputPassword1"> </label> -->
              <input type="text" class="form-control" placeholder="M.I." name="mname" maxlength="1">
            </div>
            <div class="form-group col-sm-5">
              <!-- <label for="exampleInputPassword1"> </label> -->
              <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
            </div>
          </div>


          <div class="row">
            <div class="form-group col-sm-6">
              <label for="exampleInputEmail1">Mailing Address</label>
              <!-- <label for="exampleInputPassword1"> </label> -->
              <input type="text" class="form-control" placeholder="Address" name="address" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="exampleInputEmail1">Country</label>
              <!-- <label for="exampleInputPassword1"> </label> -->
              <input type="text" class="form-control" placeholder="Country" name="country" required>
            </div>
            <div class="form-group col-sm-3">
              <label for="exampleInputEmail1">Zip</label>
              <!-- <label for="exampleInputPassword1"> </label> -->
              <input type="text" class="form-control" placeholder="Zip" name="zip" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-9" style="margin-bottom: 0;">
              <label for="exampleInputEmail1 col-sm-9">Contact Information</label>
            </div>
            <div class="form-group col-sm-3" style="margin-bottom: 0;">
              <label for="exampleInputEmail1 col-sm-12">Password</label>
            </div>
            <div class="form-group col-sm-3">
              <!-- <label for="exampleInputEmail1">Date of Birth</label> -->
              <input type="text" class="form-control" placeholder="Mobile No." name="mobile">
            </div>
            <div class="form-group col-sm-3">
              <!-- <label for="exampleInputEmail1">Place of Birth</label> -->
              <input type="text" class="form-control" placeholder="Telephone No." name="telephone" required>
            </div>
            <div class="form-group col-sm-3">
              <!-- <label for="exampleInputEmail1">Civil Status</label> -->
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group col-sm-3">
              <!-- <label for="">Password</label> -->
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label for="exampleInputPassword1">Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="fileimg">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="form-group col-sm-4">
              <label for="">Username</label>
              <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group col-sm-4">
              <label for="">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group col-sm-4">
              <label for="">Confirm Password</label>
              <input type="password" class="form-control" placeholder="Password" name="confirm_password">
            </div>
          </div> -->
          <!-- end of the newly added -->
        </div>
        <div class="modal-footer">
          <a href="index.php" class="btn btn-default" data-dismiss="modal"><span class="fas fa-times"></span>
            Cancel</a>
          <button type="submit" name="submit" class="btn btn-warning"><span class="fas fa-check"></span> Submit</button>
        </div>
      </div>
  </div>
  </form>
  </div>
  <!-- /.login-box -->



  <!-- jQuery -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/jquery/jquery.min.js"></script>
  <!-- <script src="js/jquery.min.js"></script> -->
  <!-- jQuery UI 1.11.4 -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- <script src="js/jquery-ui.min.js"></script> -->
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
  <!-- ChartJS -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/chart.js/Chart.min.js"></script>
  <!-- <script src="js/Chart.min.js"></script> -->
  <!-- Sparkline -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/sparklines/sparkline.js"></script>
  <!-- <script src="js/sparkline.js"></script> -->
  <!-- JQVMap -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/jqvmap/jquery.vmap.min.js"></script>
  <!-- <script src="js/jquery.vmap.min.js"></script> -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- <script src="js/jquery.vmap.usa.js"></script> -->
  <!-- jQuery Knob Chart -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- <script src="js/jquery.knob.min.js"></script> -->
  <!-- daterangepicker -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/moment/moment.min.js"></script>
  <!-- <script src="js/moment.min.js"></script> -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- <script src="js/daterangepicker.js"></script> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- <script src="js/tempusdominus-bootstrap-4.min.js"></script> -->
  <!-- Summernote -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- <script src="js/summernote-bs4.min.js"></script> -->
  <!-- overlayScrollbars -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- <script src="js/jquery.overlayScrollbars.min.js"></script> -->
  <!-- AdminLTE App -->
  <script src="AdminLTE-3.0.0-rc.4/dist/js/adminlte.js"></script>
  <!-- <script src="js/adminlte.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="AdminLTE-3.0.0-rc.4/dist/js/pages/dashboard.js"></script>
  <!-- <script src="js/dashboard.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="AdminLTE-3.0.0-rc.4/dist/js/demo.js"></script>
  <!-- <script src="js/demo.js"></script> -->
  <!-- DataTables -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/datatables/jquery.dataTables.js"></script>
  <!-- <script src="js/jquery.dataTables.js"></script> -->
  <script src="AdminLTE-3.0.0-rc.4/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- <script src="js/dataTables.bootstrap4.js"></script> -->
  <script>
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
  </script>
  <script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

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
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
            'month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
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

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  </script>
</body>

</html>