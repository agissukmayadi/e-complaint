<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/') ?>icon.jpg" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/template/AdminLTE/') ?>plugins/toastr/toastr.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('assets/img/') ?>icon.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">E-Complaint</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/img/user/' . $user['foto']) ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $user['nama'] ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('user') ?>" class="nav-link <?php if ($title == "Dashboard") {
                                                                                    echo "active";
                                                                                } ?> ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">DATA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/data_pengaduan') ?>" class="nav-link <?php if ($title == "Data Pengaduan") {
                                                                                                    echo "active";
                                                                                                } ?>">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Pengaduan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/profile') ?>" class="nav-link <?php if ($title == "Profile") {
                                                                                            echo "active";
                                                                                        } ?>">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">AUTH</li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt "></i>
                                <p class="text">Logout</p>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $title; ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">