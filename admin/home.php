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
          <a href="home.php" class="navbar-brand">Rant Bookshop - ADMIN</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="home.php" class="nav-link">Featured</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="home.php" class="nav-link">All Books</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">About Us</a>
        </li> -->
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
    <!-- /.navbar -->
    <!-- modal -->
    <!-- modal -->
    <!-- modal -->
    <!-- modal -->
    <!-- modal -->
    <!-- modal -->
    <!-- modal -->
    <!-- modal -->
    <!-- modal -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-yellow elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="../photo/logo-rant2.png" alt="Rant Bookshop Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light logo-rant">Rant Bookshop</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="photo/<?php echo $_SESSION['img'] ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['name'] ?></a>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-child-indent nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="true">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="home.php" class="nav-link active">
                <i class="nav-icon fas fa-certificate"></i>
                <p>
                  Products
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="transaction.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Transactions
                  <!-- <i class="fas fa-angle-left right"></i> -->
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <!--  -->
            </li>
            <li class="nav-item">
              <a href="customer.php" class="nav-link">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>
                  Customers
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="order.php" class="nav-link">
                <i class="nav-icon fab fa-audible"></i>
                <p>
                  Orders
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
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
      <!-- <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Featured Books</h1>
            </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Featured</li>
        </ol>
      </div>
    </div>
  </div>
  </div> -->
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">


        <!-- Default box -->
        <div id="rightcontent" style="position:absolute;">
          <div class="">
            <center>
              <h2>Features</h2>
            </center>
          </div>
          <label style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Product here..."
              id="filter"></label>
          <a href="#add" role="button" class="btn btn-info btn-xl" data-toggle="modal"><i
              class="icon-plus-sign icon-white"></i>Add Product</a>

          <div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="width:400px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
              <h3 id="myModalLabel">Add Product...</h3>
            </div>
            <div class="modal-body">
              <form method="post" enctype="multipart/form-data">
                <center>
                  <table>
                    <tr>
                      <td><input type="file" name="product_image" required></td>
                    </tr>
                    <?php include("random_id.php"); 
							      echo '<tr><td><input type="hidden" name="product_code" value="'.$code.'" required></td><tr/>';
							?>
                    <tr>
                      <td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;"
                          required>
                      </td>
                      <tr />
                    <tr>
                      <td><input type="text" name="product_price" placeholder="Price" style="width:250px;" required>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="text" name="product_size" placeholder="Size" style="width:250px;" maxLength="2"
                          required></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" required></td>
                    </tr>
                    <tr>
                      <td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;" required></td>
                    </tr>
                    <tr>
                      <td><input type="hidden" name="category" value="feature"></td>
                    </tr>
                  </table>
                </center>
            </div>
            <div class="modal-footer">
              <input class="btn btn-primary" type="submit" name="add" value="Add">
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
              </form>
            </div>
          </div>

          <?php
			if (isset($_POST['add']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_size = $_POST['product_size'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);
						
								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../img/".$name);
			

				$q1 = mysqli_query($conn, "INSERT INTO book (name, price, img, category)
				VALUES ('$product_name','$product_price','$name', '$category')");
				
				$q2 = mysqli_query($conn, "INSERT INTO stock ( book_id, qty) VALUES ('$product_code','$qty')");
				
				exit(header ("location:home.php"));
				
			}}
		}

				?>

          <div class="">
            <table class="table table-hover">
              <thead>
                <tr style="font-size:20px;">
                  <th>Product Image</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th>No. of Stock</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
					
					$query = mysqli_query($conn, "SELECT * FROM book ORDER BY name") or die(mysqli_error($conn));
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['book_id'];
				?>
                <tr class="del<?php echo $id;?>">
                  <td><img class="img-polaroid" src="../img/<?php echo $fetch['img']?>" height="70px" width="80px"></td>
                  <td><?php echo $fetch['name']?></td>
                  <td><?php echo $fetch['price']?></td>

                  <?php
					$query1 = mysqli_query($conn, "SELECT * FROM `stock` WHERE book_id='$id'") or die(mysqli_error($conn));
					$fetch1 = mysqli_fetch_array($query1);
					
						$qty = $fetch1['qty'];
					?>

                  <td><?php echo $fetch1['qty']?></td>
                  <td>
                    <?php
					echo "<a href='stockin.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i> Stock In</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i> Stock Out</a>";
					?>
                  </td>
                </tr>
                <?php
					}
				?>
              </tbody>
            </table>
          </div>
        </div>
        <?php
  /* stock in */
  if(isset($_POST['stockin'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE book_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck + $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `book_id`='$pid'") or die(mysqli_error($conn));
  
  header("Location:admin_feature.php");

 }
 
  /* stock out */
 if(isset($_POST['stockout'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE book_id='$pid'") or die(mysqli_error($conn));
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `book_id`='$pid'") or die(mysqli_error($conn));
  
  //header("Location:admin_feature.php");

 }
  ?>
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
</body>

</html>