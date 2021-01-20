<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sistem Arsip SKPD</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/ionicons-2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url('template/css.css') ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <!-- <span class="logo-mini"><b>A</b>LT</span> -->
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Sistem Arsip SKPD</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">



                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url()?>template/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $user['fullname']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                    <img src="<?php echo base_url()?>template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p><?= $user['fullname']; ?></p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <?php
                                            echo anchor('main/updateprofile','Update Profile',array('class'=>'btn btn-default btn-flat'));
                                            ?>
                                        </div>
                                        <div class="pull-right">
                                            <?php
                                            echo anchor('auth/logout','Logout',array('class'=>'btn btn-default btn-flat'));
                                            ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel" style="margin-top: 5px;">
                        <div class="pull-left image">
                            <img src="<?php echo base_url()?>template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?= $user['fullname'] ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <div style="margin-top: 10px;">
                    </div>
                    <!-- search form -->
                    <!-- <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php if ($_SESSION['tipe_user'] === 'Admin'): ?>
                    <ul class="sidebar-menu">
                        <li class="header" style="color: white;">HOME MENU</li>
                        <li class="<?php if($this->uri->segment(2)=="home") {echo "active";} ?>">
                            <a href="<?= base_url('main/home') ?>">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                            </a>
                        </li>
                        <li class="header" style="color: white;">MENU UTAMA</li>
                        <li class="<?php if($this->uri->segment(2)=="wajibpajak") {echo "active";} elseif($this->uri->segment(2)=="tambahwajibpajak") {echo "active";} elseif($this->uri->segment(2)=="editwajibpajak") {echo "active";} ?>">
                            <a href="<?= base_url('main/wajibpajak'); ?>">
                            <i class="fa fa-list-alt"></i>
                            <span>Wajib Pajak</span>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="skpd") {echo "active";} elseif($this->uri->segment(2)=="tambahskpd") {echo "active";} elseif($this->uri->segment(2)=="editskpd") {echo "active";} ?>">
                            <a href="<?= base_url('main/skpd'); ?>">
                            <i class="fa fa-newspaper-o"></i>
                            <span>SKPD</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?= base_url('main/laporan'); ?>">
                            <i class="fa fa-print"></i>
                            <span>Laporan</span>
                            </a>
                        </li> -->
                        <li class="header" style="color: white;">MENU LAINNYA</li>
                        <li class="<?php if($this->uri->segment(2)=="user") {echo "active";} elseif($this->uri->segment(2)=="usertambah") {echo "active";} elseif($this->uri->segment(2)=="useredit") {echo "active";} ?>">
                            <a href="<?= base_url('main/user'); ?>">
                            <i class="fa fa-user-plus"></i>
                            <span>Pengaturan User</span>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="updateprofile") {echo "active";} ?>">
                            <a href="<?= base_url('main/updateprofile'); ?>">
                            <i class="fa fa-user"></i>
                            <span>Update Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('auth/logout'); ?>">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                            </a>
                        </li>
                    </ul>

                    <?php elseif ($_SESSION['tipe_user'] === 'User'): ?>
                    <ul class="sidebar-menu">
                        <li class="header" style="color: white;">HOME MENU</li>
                        <li class="<?php if($this->uri->segment(2)=="home") {echo "active";} ?>">
                            <a href="<?= base_url('main/home') ?>">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                            </a>
                        </li>
                        <li class="header" style="color: white;">MENU UTAMA</li>
                        <li class="<?php if($this->uri->segment(2)=="wajibpajak") {echo "active";} elseif($this->uri->segment(2)=="tambahwajibpajak") {echo "active";} elseif($this->uri->segment(2)=="editwajibpajak") {echo "active";} ?>">
                            <a href="<?= base_url('main/wajibpajak'); ?>">
                            <i class="fa fa-list-alt"></i>
                            <span>Wajib Pajak</span>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="skpd") {echo "active";} elseif($this->uri->segment(2)=="tambahskpd") {echo "active";} elseif($this->uri->segment(2)=="editskpd") {echo "active";} ?>">
                            <a href="<?= base_url('main/skpd'); ?>">
                            <i class="fa fa-newspaper-o"></i>
                            <span>SKPD</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?= base_url('main/user'); ?>">
                            <i class="fa fa-user-plus"></i>
                            <span>User</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="<?= base_url('main/laporan'); ?>">
                            <i class="fa fa-print"></i>
                            <span>Laporan</span>
                            </a>
                        </li> -->
                        <li class="header" style="color: white;">MENU LAINNYA</li>
                        <li class="<?php if($this->uri->segment(2)=="updateprofile") {echo "active";} ?>">
                            <a href="<?= base_url('main/updateprofile'); ?>">
                            <i class="fa fa-user"></i>
                            <span>Update Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('auth/logout'); ?>">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                    <?php endif; ?>

                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- <section class="content-header">
                    <h1>
                        Data Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section> -->


                <?php
                echo $contents;
                ?>



            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; <?= date('Y') ?> | </strong> Rachmat Abdullah
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url() ?>template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url() ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>template/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url() ?>template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url() ?>template/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>template/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
