<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>REGISTER FORM</title>
</head>
<style>
.box {
    width: 332px;
    height: auto;
    background: #549b3f;
    border: 1px solid #000000;
}

body {
    background-color: #d0ffe0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}
</style>

<?php
$user_email = [
    'name' => 'user_email',
    'id' => 'user_email',
    'value' => null,
    'class' => 'form-control'
];
$user_name = [
    'name' => 'user_name',
    'id' => 'user_name',
    'value' => null,
    'class' => 'form-control'
];
$user_password = [
    'name' => 'user_password',
    'id' => 'user_password',
    'class' => 'form-control'
];
$session = session();
$errors = $session->getFlashdata('errors');
?>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-left h-50">
                <div class="col-md-8 col-lg-7 col-xl-8">
                    <figcaption align="center">
                        <img src="https://man1balam.sch.id/media_library/posts/post-image-1633590476146.png"
                            class="img-fluid" alt="LOGO KANWIL" style="width:299px;height:268px;">

                        <!-- <h1><b>SIPMUK</b></h1> -->
                        <h4>SISTEM INFORMASI KEGIATAN</h4>
                        <h6>KANWIL KEMENTERIAN AGAMA PROVINSI LAMPUNG</h6>
                    </figcaption>
                </div>
                <div class="box">
                    <h1 class=" mt-5 mb-3 ">
                        <center>REGISTER</center>
                    </h1>

                    <?php if ($errors != null) : ?>
                    <div class="alert alert_danger" role="alert">
                        <h4 class="alert-heading">Terjadi Kesalahan</h4>
                        <hr>
                        <p class="mb-0">
                            <?php foreach ($errors as $err) {
                                    echo $err . '<br>';
                                } ?>
                        </p>
                    </div>
                    <?php endif ?>

                    <form method="POST" action="<?= base_url('/register/process') ?>">
                        <div class="col-md-10 mt-10 offset-xl-1">
                            <!-- Email input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="user_email">Email</label>
                                <input type="email" name="user_email" id="user_email" class="form-control"
                                    placeholder="Masukkan Email" />
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="user_name">Username</label>
                                <input type="text" name="user_name" id="user_name" class="form-control"
                                    placeholder="Masukkan Username" />
                            </div>

                            <!-- Name input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Masukkan Nama" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="user_password">Password</label>
                                <input type="password" name="user_password" id="user_password" class="form-control"
                                    placeholder="Masukkan Password" />
                            </div>

                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>

                            <div class="mr-10">
                                <p>Back to
                                    <a href="<?= site_url('/login') ?>">Login</a>
                                    <text>or</text>
                                    <a href="<?= site_url('/') ?>">Home</a>
                                </p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

</body>

</html>