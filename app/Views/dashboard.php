<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPMUK - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('sb-admin-2.min.css') ?> " rel="stylesheet">
    <link href="<?= base_url('docs/5.2/dist/css/bootstrap.min.css'); ?> " rel="stylesheet">

</head>
<style>
.navbar-nav {
    background-color: #004e15;
}
</style>

<body id="page-top">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIPMUK | KEMENAG</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fa fa-tachometer"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kegiatan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" style="margin-top:2px;">
                <a class="nav-link " href="<?= base_url('admin/view_keg1') ?> ">
                    <span>Pelatihan EMIS</span>
                </a>
                <a class="nav-link" href="<?= base_url('admin/view_keg2') ?> ">
                    <span>Workshop Halaqoh</span>
                </a>
                <a class="nav-link" href="<?= base_url('admin/view_keg3') ?> ">
                    <span>Sosialisasi BOP</span>
                </a>

            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="" method="post"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <!-- <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                name="keyword" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">
                                    <i class="fa fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div> -->
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" data-bs-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <a class="dropdown-item" href="<?= base_url('/logout') ?>">
                                    <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="biodata/export" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                class="fa fa-file-excel-o fa-sm text-white-50"></i> Export</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Pelatihan EMIS Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 ml-2">
                                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                Pelatihan EMIS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_1; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Workshop Halaqoh Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 ml-2">
                                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1 ">
                                                Workshop Halaqoh</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_2; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sosialisasi BOP Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 ml-2">
                                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                Sosialisasi BOP</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_3; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- SCRIPT JAVASCRIPT -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

                <script>
                </script>