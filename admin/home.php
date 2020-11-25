<?php
include("config.php");
include("session.php");


//$mysqli->real_escape_string($username);
?>

<!DOCTYPE html>
<html>
<!-- navbar color: #007bff -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rant Bookstore | Home</title>
  <link rel="icon" href="../photo/logo-rant2.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet"
    href="../AdminLTE-3.0.0-rc.4/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../AdminLTE-3.0.0-rc.4/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Ubuntu&display=swap" rel="stylesheet">

  <style>
  .logo-rant {
    font-family: 'Ubuntu', sans-serif;
  }

  * {
    font-family: 'Ubuntu', sans-serif;
  }

  .cover {
    width: auto;
    height: 250px;
  }

  .leche {
    display: none;
  }
  </style>
</head>
<!-- FD7E14 -->


<body class="hold-transition layout-top-nav">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-static navbar-expand navbar-yellow navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">

        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <img height=45px src="../photo/logo-rant2.png" alt="">
          <a href="home.php" class="navbar-brand">Rant Bookshop - ADMIN</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a href="#" data-toggle="modal" class="nav-link">Hi <?php echo $_SESSION['username'] ?>!</a>
        </li>
        <li class="nav-item">
          <a href="../logout.php" class="nav-link">Logout</a>
        </li>
        <!-- Notifications Dropdown Menu -->
      </ul>

    </nav>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-11">
              <h1 class="m-0 text-dark">All Books</h1>
            </div>
            <div class="col-sm-1 float-right">
              <a href="#book-add" data-toggle="modal" class="btn btn-warning">&nbsp;<span class="fas fa-plus"></span>
                &nbsp;&nbsp;&nbsp;Add</a>
            </div>
            <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Featured</li>
              </ol>
            </div> -->
          </div>
        </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->


      <!-- Default box -->
      <!-- <div id="rightcontent" style="position:absolute;">
        <div class="">
          <center>
            <h2>Features</h2>
          </center>
        </div>
        <a href="#add" data-toggle="modal" role="button" class="btn btn-info btn-xl" data-toggle="modal"><i
            class="icon-plus-sign icon-white"></i>Add Product</a>
      </div> -->

      <div class="card card-primary">
        <!-- <div class="card-header">
            <h4 class="m-0 text-light">All Members</h4>
          </div> -->
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Image</th>
                <th class="leche">ID</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // session_start();
              $query = "SELECT book.`book_id`, book.`img`, book.`name`, book.`author`, book.`price`, stock.`stock_id`, stock.`qty` FROM book INNER JOIN stock ON book.`book_id` = stock.`book_id` ORDER BY book.`name`;";
              // $result = filterRecord($query);
              $result = mysqli_query($conn, $query) or die("Could not perform select on table 'book': " . mysqli_error($conn));

              // $query = mysqli_query($conn,"select *  from 'user'");
              while ($row = mysqli_fetch_array($result)) {
                $id = $row['stock_id'];
                $bid = $row['book_id'];
                ?>
              <tr>
                <td><img height=100px src="../img/<?php echo $row['img']; ?>"></td>
                <td class="leche"><?php echo $bid; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                <td>
                  <div class="btn-group ">
                    <a href="stock.php?id=<?php echo $id; ?>&action=plus" class="btn btn-sm btn-primary"><span
                        class="fas fa-plus"></span> Stock In</a>
                    <a href="stock.php?id=<?php echo $id; ?>&action=minus" class="btn btn-sm btn-warning"><span
                        class="fas fa-minus"></span> Stock Out</a>
                  </div>

                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Image</th>
                <th class="leche">ID</th>
                <th>Product Name</th>
                <th>Author</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>


        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2019 <a href="https://twitter.com/renz_alfons"
            target="_blank">RKAlfonso.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
        </div>
      </footer>

      <!-- Control Sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/jquery/jquery.min.js"></script>
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <!-- ChartJS -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/chart.js/Chart.min.js"></script>
    <!-- <script src="js/Chart.min.js"></script> -->
    <!-- Sparkline -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/sparklines/sparkline.js"></script>
    <!-- <script src="js/sparkline.js"></script> -->
    <!-- JQVMap -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/jqvmap/jquery.vmap.min.js"></script>
    <!-- <script src="js/jquery.vmap.min.js"></script> -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- <script src="js/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- <script src="js/jquery.knob.min.js"></script> -->
    <!-- daterangepicker -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/moment/moment.min.js"></script>
    <!-- <script src="js/moment.min.js"></script> -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- <script src="js/daterangepicker.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- <script src="js/tempusdominus-bootstrap-4.min.js"></script> -->
    <!-- Summernote -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- <script src="js/summernote-bs4.min.js"></script> -->
    <!-- overlayScrollbars -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- <script src="js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="../AdminLTE-3.0.0-rc.4/dist/js/adminlte.js"></script>
    <!-- <script src="js/adminlte.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../AdminLTE-3.0.0-rc.4/dist/js/pages/dashboard.js"></script>
    <!-- <script src="js/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="../AdminLTE-3.0.0-rc.4/dist/js/demo.js"></script>
    <!-- <script src="js/demo.js"></script> -->
    <!-- DataTables -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/datatables/jquery.dataTables.js"></script>
    <!-- <script src="js/jquery.dataTables.js"></script> -->
    <script src="../AdminLTE-3.0.0-rc.4/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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
    <?php include('modal.php'); ?>
</body>

</html>