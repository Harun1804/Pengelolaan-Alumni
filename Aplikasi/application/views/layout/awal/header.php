<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Sistem Informasi Alumni SMAN 3 Subang</title>
    <link href="<?php echo base_url('assets/template/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/template/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/css/sb-admin.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/img/sma3.png');?>" rel="shortcut icon"/>
</head>
<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo site_url('welcome');?>">SIAS3</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    </nav>
  <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('welcome');?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/hallogin');?>">
              <i class="fas fa-fw fa-rocket"></i>
              <span>Login</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/halregis');?>">
              <i class="fas fa-fw fa-user"></i>
              <span>Register</span></a>
          </li>
        </ul>

        <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><?php echo $menu;?></li>
          </ol>
