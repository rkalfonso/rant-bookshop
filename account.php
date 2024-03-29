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
  <link rel="icon" href="photo/logo-rant2.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/fontawesome-free/css/all.min.css">
  <!-- <link rel="stylesheet" href="css/all.min.css"> -->
  <!-- <script src="https://kit.fontawesome.com/a4c7d859ee.js" crossorigin="anonymous"></script> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
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
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/dist/css/adminlte.min.css">
  <!-- <link rel="stylesheet" href="/css/adminlte.min.css"> -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- <link rel="stylesheet" href="css/OverlayScrollbars.min.css"> -->
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/daterangepicker/daterangepicker.css">
  <!-- <link rel="stylesheet" href="css/daterangepicker.css"> -->
  <!-- summernote -->
  <link rel="stylesheet" href="AdminLTE-3.0.0-rc.4/plugins/summernote/summernote-bs4.css">
  <!-- <link rel="stylesheet" href="css/summernote-bs4.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Ubuntu&display=swap" rel="stylesheet">

  <style>
  .logo-rant {
    font-family: 'Ubuntu', sans-serif;
  }

  * {
    font-family: 'Ubuntu', sans-serif;
    /* font-family: 'Montserrat', sans-serif;
      font-family: 'Raleway', sans-serif; */
  }

  .hey {
    width: 800px;
  }

  .cover {
    width: auto;
    height: 250px;
  }
  </style>
</head>
<!-- FD7E14 -->


<body class="hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed layout-fixed">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-static navbar-expand navbar-yellow navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="home.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="home.php" class="nav-link">Featured</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="home.php" class="nav-link">All Books</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">About Us</a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="cart.php?action=view">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-danger navbar-badge">
              <?php
              if (!isset($_SESSION['cart'])) {
                echo 0;
              } else {
                echo count($_SESSION['cart']);
              }
              ?>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#profile" data-toggle="modal" class="nav-link">Hi <?php echo $_SESSION['name'] ?>!</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link">Logout</a>
        </li>
        <!-- Notifications Dropdown Menu -->
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-yellow elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="photo/logo-rant2.png" alt="Rant Bookshop Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light logo-rant"><b>Rant</b> Bookshop</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="photo/<?php echo $_SESSION['img'] ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['name'] ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-child-indent nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="true">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="home.php" class="nav-link">
                <i class="nav-icon fas fa-certificate"></i>
                <p>
                  Featured
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Category
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php
                $sql_sel_category = "SELECT DISTINCT category FROM book ORDER BY category";
                $query_category = $conn->query($sql_sel_category) or die("Could not insert in table category; " . mysqli_error($conn));
                while ($fetch_cat = mysqli_fetch_array($query_category)) {
                  echo '<li class="nav-item">';
                  echo '<a href="category.php?cat=' . $fetch_cat["category"] . '" class="nav-link">';
                  //echo '<i class="far fa-circle nav-icon"></i>';
                  echo '<p>' . $fetch_cat["category"] . '</p>';
                  echo '</a></li>';
                }
                ?>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>
                  Author
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php
                $sql_sel_author = "SELECT DISTINCT author FROM book ORDER BY author";
                $query_author = $conn->query($sql_sel_author) or die("Could not insert in table author; " . mysqli_error($conn));
                while ($fetch_auth = mysqli_fetch_array($query_author)) {
                  echo '<li class="nav-item">';
                  echo '<a href="author.php?author=' . $fetch_auth["author"] . '" class="nav-link">';
                  echo '<p>' . $fetch_auth["author"] . '</p>';
                  echo '</a></li>';
                }
                ?>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Profile</h1>
            </div>
            <!--/.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Featured</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->

        <div class="card card-warning hey mx-auto">
          <div class="card-header">
            <h5>Edit Profile</h5>
          </div>
          <!-- /.card-header -->
          <?php
          $id = $_GET['id'];
          $sqlsel_user = "SELECT * FROM customer WHERE customer_id = '$id'";
          $query_user = $conn->query($sqlsel_user) or die("Could not perform select on table 'customer': " . mysqli_error($conn));
          $fetch_user = mysqli_fetch_array($query_user);
          ?>
          <!-- form start -->
          <form method="POST" action="update-cx.php?id=<?php echo $fetch_user['customer_id']; ?>">
            <div class="card-body">
              <!-- start of the newly added -->
              <div class="row">
                <div class="form-group col-sm-12" style="margin-bottom: 0;">
                  <input type="hidden" name="memberid">
                  <label for="exampleInputEmail1">Name</label>
                </div>
                <div class="form-group col-sm-5">
                  <!-- <label for="exampleInputEmail1">Name</label> -->
                  <input type="text" class="form-control" placeholder="First Name" name="fname" required
                    value="<?php echo ucwords($fetch_user['f_name']); ?>">
                </div>
                <div class="form-group col-sm-2">
                  <!-- <label for="exampleInputPassword1"> </label> -->
                  <input type="text" class="form-control" placeholder="M.I." name="mname" maxlength="1"
                    value="<?php echo ucwords($fetch_user['mi']); ?>">
                </div>
                <div class="form-group col-sm-5">
                  <!-- <label for="exampleInputPassword1"> </label> -->
                  <input type="text" class="form-control" placeholder="Last Name" name="lname" required
                    value="<?php echo ucwords($fetch_user['l_name']); ?>">
                </div>
              </div>


              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Mailing Address</label>
                  <!-- <label for="exampleInputPassword1"> </label> -->
                  <input type="text" class="form-control" placeholder="Address" name="address" required
                    value="<?php echo ucwords($fetch_user['address']); ?>">
                </div>
                <div class="form-group col-sm-3">
                  <label for="exampleInputEmail1">Country</label>
                  <!-- <label for="exampleInputPassword1"> </label> -->
                  <input type="text" class="form-control" placeholder="Country" name="country" required
                    value="<?php echo ucwords($fetch_user['country']); ?>">
                </div>
                <div class="form-group col-sm-3">
                  <label for="exampleInputEmail1">Zip</label>
                  <!-- <label for="exampleInputPassword1"> </label> -->
                  <input type="text" class="form-control" placeholder="Zip" name="zip" required
                    value="<?php echo ucwords($fetch_user['zip']); ?>">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-12" style="margin-bottom: 0;">
                  <label for="exampleInputEmail1 col-sm-12">Contact Information</label>
                </div>
                <div class="form-group col-sm-3">
                  <!-- <label for="exampleInputEmail1">Date of Birth</label> -->
                  <input type="text" class="form-control" placeholder="Mobile No." name="mobile"
                    value="<?php echo $fetch_user['mobile']; ?>">
                </div>
                <div class="form-group col-sm-3">
                  <!-- <label for="exampleInputEmail1">Place of Birth</label> -->
                  <input type="text" class="form-control" placeholder="Telephone No." name="telephone" required
                    value="<?php echo $fetch_user['telephone']; ?>">
                </div>
                <div class="form-group col-sm-6">
                  <!-- <label for="exampleInputEmail1">Civil Status</label> -->
                  <input type="email" class="form-control" placeholder="Email" name="email"
                    value="<?php echo $fetch_user['email']; ?>">
                </div>
              </div>
              <!-- end of the newly added -->
            </div>
            <div class="modal-footer">
              <a href="home.php" class="btn btn-default" data-dismiss="modal"><span class="fas fa-times"></span>
                Cancel</a>
              <button type="submit" class="btn btn-warning"><span class="fas fa-check"></span> Submit</button>
            </div>
        </div>
        </form>

        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2019 <a href="https://twitter.com/renz_alfons" target="_blank">RKAlfonso.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
  </div>
  <!-- ./wrapper -->

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
  <?php include("modal-profile.php"); ?>

</body>

</html>