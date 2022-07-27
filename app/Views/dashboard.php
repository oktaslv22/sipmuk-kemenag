<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fa Icon -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">KEMENAG</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control h-10 w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <button class="btn btn-dark" style="padding: 12px 20px;" type="button" id="button-addon2"><i
                class="fa fa-search" href="#"></i></button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out<i class="fa fa-sign-out" href="#"></i></a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <div class="nav flex-column">
                        <div class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span class="fa fa-dashboard" class="align-text-bottom"></span> Dashboard</a>
                        </div>
                        <div class="dropdown">
                            <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Kegiatan
                            </span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pelatihan Emis</a></li>
                                <li><a class="dropdown-item" href="#">Workshop Halawqoh</a></li>
                                <li><a class="dropdown-item" href="#">Sosialisasi Bimtek</a></li>
                        </div>
                    </div>
                    <!-- <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#">
                                <span class="span" class="dropdown-menu"></span>
                                Kegiatan
                                <select name="kegiatan" id="kegiatan">
                                    <option value="pelatihan emis">Pelatihan Emis</option>
                                    <option value="workshop halaqoh">Workshop Halawqoh</option>
                                    <option value="sosialisasi bimtek">Sosialisasi Bimtek</option>
                                </select> -->

                </div>
            </nav>
        </div>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="fa fa-dashboard"></h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button onclick="window.print()" type="button" class="btn btn-sm btn-outline-secondary">Download
                            <i class="fa fa-print"></i></button>
                    </div>
                </div>
            </div>


            <!-- Content Row -->
            <div class="row">

                <!-- Kegiatan 1 Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Kegiatan 1</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kegiatan 2 Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Kegiatan 2</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kegiatan 3 Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kegiatan 3
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kegiatan 4 Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Kegiatan 4</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ngambil dr kegiatan di home.php -->
            <h5>Kegiatan 1</h5>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tgl Lahir</th>
                            <th scope="col">Tempat Tugas</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">NPWP</th>
                            <th scope="col">Nama Rekening</th>
                            <th scope="col">Nomor Rekening</th>
                            <th scope="col">Nama Bank</th>
                            <th scope="col">Tempat Tinggal</th>
                            <th scope="col">Kab/Kota</th>
                            <th scope="col">Alamat Rumah</th>
                            <th scope="col">Alamat Kantor</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($biodata as $row) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->nip; ?></td>
                            <td><?= $row->tmpt_lahir; ?></td>
                            <td><?= $row->tgl_lahir; ?></td>
                            <td><?= $row->tempat_tugas; ?></td>
                            <td><?= $row->jabatan; ?></td>
                            <td><?= $row->npwp; ?></td>
                            <td><?= $row->nama_rek; ?></td>
                            <td><?= $row->nomor_rek; ?></td>
                            <td><?= $row->nama_bank; ?></td>
                            <td><?= $row->tempat_tinggal; ?></td>
                            <td><?= $row->kab_kota; ?></td>
                            <td><?= $row->alamat_rumah; ?></td>
                            <td><?= $row->alamat_kantor; ?></td>
                            <td><?= $row->telp; ?></td>
                            <td>
                                <i class="btn btn-warning fa fa-print" href="<?= base_url("#"); ?> "></i>
                                <i class="btn btn-danger fa fa-trash"
                                    href="<?= base_url("biodata/delete/$row->id_biodata"); ?> "
                                    onclick="return confirm('Apakah yakin ingin menghapus data?')"></i>
                            </td>
                        </tr>
                        <?php
                        } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    </div>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>