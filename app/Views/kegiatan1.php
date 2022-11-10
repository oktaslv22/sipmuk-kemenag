<?php
include 'navbar.php'
?>

<body>
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h3 class="fw-bolder mb-1">PELATIHAN EMIS</h3>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">PAPKI</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Kemenag Prov.
                            Lampung</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" id="img1"
                            src="<?= base_url('img/keg1.jpg'); ?> " alt="..." height="90" width="300" /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">EMIS (Education Management Information System) merupakan Platform Sistem
                            Pengelolaan Data Pokok Pendidikan yang dikelola oleh Kementerian Agama (Kemenag).</p>
                        <p class="fs-5 mb-4">Pelatihan EMIS akan dilaksanakan selama 2 hari pada: <br><b> Hari/Tanggal :
                                Sabtu/22
                                Oktober 2022<br>
                                Jam Registrasi : 08.30 WIB<br>Jam Kegiatan : 09.00 WIB<br> Tempat : Aula Sai Batin
                                Kemenag
                                Provinsi Lampung</b></p>
                        <p class="fs-5 mb-4">Sehubung dengan hal ini, dimohon untuk menugaskan Admin/Operator dari
                            masing-masing Kemenag
                            se-Provinsi Lampung. Beberapa hal yang perlu diperhatikan peserta kegiatan adalah sebagai
                            berikut: <br> 1. &ensp; Wajib membawa surat tugas asli dari instansi yang ditandangani
                            pimpinan instansi dan dibubuhi stempel. <br> 2. &ensp; Mengisi formulir biodata peserta<br>
                            3. &ensp;
                            Mematuhi dan menerapkan protokol
                            kesehatan
                            masa pandeimi Covid-19 yang berlaku dengan
                            melaksanakan , physical distancing menggunakan masker dan atau kelengkapan lainnya.
                        </p>
                        <p class="fs-5 mb-4">Materi panduan EMIS bisa diunduh <a href="#">disini</a></p>
                        <!-- <p class="fs-5 mb-4">Untuk mengisi form biodata di kegiatan ini silahkan klik <a
                                href="/formbiodata">disini</a></p> -->
                    </section>
                </article>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">

                <!-- Categories widget -->
                <!-- <div class="card mb-4">
                    <div class="card-header text-light" style="background: #004e15">Kategori</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Materi</a></li>
                                    <li><a href="#!">Petunjuk Pelaksana</a></li>
                                    <li><a href="#!">Petunjuk Teknis</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Persyaratan</a></li>
                                    <li><a href="#!">#</a></li>
                                    <li><a href="#!">#</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header text-light" style="background: #004e15">Formulir Biodata Peserta</div>
                    <div class="card-body"><a href="/formbiodata">klik disini</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <!-- <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer> -->


</body>

</html>