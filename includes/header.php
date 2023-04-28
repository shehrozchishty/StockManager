<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>

<head>

  <title>Stock Manager</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
  <!-- bootstrap theme-->
  <link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
  <script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
  <script src="assests/bootstrap/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
</head>

<body>

  <header>
    <div class="toggle">
      <i class="fas fa-bars"></i>
    </div>
    <h3>Dashboard</h3>
    <a href="#">
      <i class="fas fa-sign-out-alt"></i>
    </a>
  </header>
  <nav style="z-index:1; position:absolute;">
    <ul>
      <li>
        <a class="toggle">
          <span class="icon"><i class="fas fa-bars"></i></span>
          <span class="title">Menu</span>
        </a>
      </li>
      <li>
        <a href="index.php">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span>
        </a>
      </li>
      <li>
        <a href="brand.php">
          <span class="icon"><i class="fas fa-store"></i></span>
          <span class="title">brand.php</span>
        </a>
      </li>
      <li>
        <a href="categories.php">
          <span class="icon"><i class="fas fa-list"></i></span>
          <span class="title">Category</span>
        </a>
      </li>
      <li>
        <a href="product.php">
          <span class="icon"><i class="fas fa-tags"></i></span>
          <span class="title">Product</span>
        </a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="icon"><i class="fas fa-shopping-cart"></i></span>
          <span class="title">Orders</span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="orders.php?o=add">
              <span class="icon"><i class="glyphicon glyphicon-plus"></i></span>
              <span class="title">Add Orders</span>
            </a>
          </li>
          <li>
            <a href="orders.php?o=manord">
              <span class="icon"><i class="glyphicon glyphicon-edit"></i></span>
              <span class="title">Manage Orders</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="report.php">
          <span class="icon"><i class="fas fa-file-pdf"></i></span>
          <span class="title">Report</span>
        </a>
      </li>
      <li>
        <a href="setting.php">
          <span class="icon"><i class="fas fa-cog"></i></span>
          <span class="title">Setting</span>
        </a>
      </li>
      <li>
        <a href="logout.php">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span class="title">Sign Out</span>
        </a>
      </li>
    </ul>
  </nav>



  <div class="container" style="padding-top: 50px;">