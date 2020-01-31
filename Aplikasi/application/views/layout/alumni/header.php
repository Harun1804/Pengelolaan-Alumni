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

      <a class="navbar-brand mr-1" href="#">Alumni</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            <span><?php echo $username;?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo site_url('alumni/halpengaturan');?>">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('alumni/logout');?>">Logout</a>
          </div>
        </li>
      </ul>

    </nav>
  <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('alumni');?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('alumni/univ');?>">
              <i class="fas fa-fw  fa-trophy"></i>
              <span>Posisi Alumni</span></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Teman</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('alumni/angkatan');?>">Satu Angkatan</a>
            <a class="dropdown-item" href="<?php echo site_url('alumni/showangkatan');?>">Berbeda Angkatan</a>
          </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('alumni/saran');?>">
              <i class="fas fa-fw fa-paper-plane"></i>
              <span>Saran</span></a>
          </li>
        </ul>

        <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Alumni</a>
            </li>
            <li class="breadcrumb-item active"><?php echo $menu;?></li>
          </ol>