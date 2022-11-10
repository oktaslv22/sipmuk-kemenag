<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<style>
body {
    background-color: #ffffff;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}

.navbar {
    background-color: #004e15;
    font-family: Arial, Helvetica, sans-serif;

}
</style>

<?php
$session = session();
?>

<body>


    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://lampung.kemenag.go.id/"><img
                    src="https://man1balam.sch.id/media_library/posts/post-image-1633590476146.png" alt="LOGO KANWIL"
                    width="55" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: #ffffff;" aria-current="page"
                            href="<?= base_url('/') ?>"><b>HOME</b></a>
                    </li>
                    <li class=" nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #ffffff;" data-bs-toggle="dropdown">
                            <b>KEGIATAN</b>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('/kegiatan1') ?>">Pelatihan EMIS</a>
                            <a class="dropdown-item" href="<?= base_url('/kegiatan2') ?>">Workshop Halaqoh</a>
                            <a class="dropdown-item" href="<?= base_url('/kegiatan3') ?>">Sosialisasi BOP</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #ffffff;"
                            href="<?= base_url('/tentang') ?>"><b>TENTANG</b></a>
                    </li>
                </ul>

                <?php if ($session->get('logged_in')) : ?>
                <div class="navbar right">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffff;" href="<?= base_url('/logout') ?>"><span
                                    class="glyphicon glyphicon-log-in"></span><b>LOGOUT</b></a>
                        </li>
                    </ul>
                </div>

                <?php else : ?>
                <div class="navbar right">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffff;" href="<?= base_url('/login') ?>"><span
                                    class="glyphicon glyphicon-log-in"></span><b>LOGIN</b></a>
                        </li>
                    </ul>
                </div>
                <?php endif ?>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>