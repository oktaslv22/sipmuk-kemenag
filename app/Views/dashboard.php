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

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    body {
        font-size: .875rem;
    }

    .feather {
        width: 16px;
        height: 16px;
    }

    /*
 * Sidebar
 */

    .sidebar {
        position: fixed;
        top: 0;
        /* rtl:raw:
  right: 0;
  */
        bottom: 0;
        /* rtl:remove */
        left: 0;
        z-index: 100;
        /* Behind the navbar */
        padding: 48px 0 0;
        /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
        .sidebar {
            top: 5rem;
        }
    }

    .sidebar-sticky {
        height: calc(100vh - 48px);
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;
    }

    .sidebar .nav-link.active {
        color: #2470dc;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
    }

    /*
 * Navbar
 */

    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
    }

    .navbar .form-control {
        padding: .75rem 1rem;
    }

    .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    @media print {

        .position-sticky,
        .sticky-top,
        .btn-toolbar,
        .navbar-toggler-icon,
        th:nth-child(17) {
            display: none;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
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
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span class="fa fa-home" class="align-text-bottom"></span> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#">
                                <span class="span" class="dropdown-menu"></span>
                                Kegiatan
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="fa fa-home"></h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button onclick="window.print()" type="button"
                                class="btn btn-sm btn-outline-secondary">Download <i class="fa fa-print"></i></button>
                        </div>
                    </div>
                </div>
                <h5>Bidang PAPKI</h5>
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