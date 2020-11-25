<?php
include("config.php");
include('session.php');
?>

<aside class="main-sidebar sidebar-light-yellow elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="photo/logo-rant2.png" alt="Rant Bookshop Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light logo-rant">Rant Bookshop</span>
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
            <a href="home.php" class="nav-link active">
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
                //echo '<i class="far fa-circle nav-icon"></i>';
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