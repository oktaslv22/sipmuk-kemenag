<?php
include 'navbar.php'
?>

<style>
.featurette-divider {
    margin: 5rem 0;
}

.featurette-heading {
    letter-spacing: -.05rem;
    font-size: 50px;
}

@media (min-width: 40em) {

    /* Bump up size of carousel content */
    .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
    }

}
</style>

<div class="container">
    <div class="row d-flex align-items-center justify-content-center h-50">
        <br>
        <figcaption align="center">
            <!-- <img src="https://man1balam.sch.id/media_library/posts/post-image-1633590476146.png" class="img-fluid"
                    alt="LOGO KANWIL" style="width:192px;height:172px;">
                 -->
            <br>
            <!-- <h1>Hi, <?= session()->get('name'); ?> !</h1> -->
            <br>
            <h3 class="lead">Selamat datang di</h3>
            <h4><b>SISTEM INFORMASI KEGIATAN</b></h5>
                <p>KANWIL KEMENTERIAN AGAMA PROVINSI LAMPUNG</p><br>

                <hr class="featurette-divider">
        </figcaption>

        <div class="container marketing">
            <center>
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="<?= base_url('img/keg1.jpg'); ?> ">
                        </img>

                        <h3 class="fw-normal"><b>Pelatihan EMIS</b></h3>
                        <p>Menjelang rilisnya EMIS babak baru, pihak EMIS mengeluarkan Materi Training/Panduan terkait
                            EMIS untuk Tahun 2022. Sehingga diperlukan pelatihan EMIS untuk para operator Kab atau Kota.
                        </p>
                        <p><a class="btn btn-success" href="<?= base_url('/kegiatan1') ?>">Detail &raquo;</a>
                        </p>
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="<?= base_url('img/keg2.jpg'); ?> " </img>

                        <h3 class=" fw-normal"><b>Workshop Halaqoh</b></h3>
                        <p>Kementerian Agama mengajak semua pimpinan pondok pesantren secara bersama menyiapkan dan
                            memastikan bahwa pesantren siap menjadi destinasi atau tujuan dan kiblat pendidikan islam di
                            dunia.</p>
                        <p><a class="btn btn-success" href="<?= base_url('/kegiatan2') ?>">Detail &raquo;</a>
                        </p>
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="<?= base_url('img/keg3.jpg'); ?> " </img>

                        <h3 class="fw-normal"><b>Sosialisasi BOP</b></h3>
                        <p>Program BOP ini digelar sebagai pedoman dan pengelolaan BOP dalam rangka meningkatkan layanan
                            kepada masyarakat.Pengelola BOP harus mampu dan paham tentang rambu-rambu LPj BOP agar
                            terhindar dari pelanggaran hukum.</p>
                        <p><a class="btn btn-success" href="<?= base_url('/kegiatan3') ?>">Detail &raquo;</a>
                        </p>
                    </div><!-- /.col-lg-4 -->
            </center>
        </div><!-- /.row -->

    </div><!-- /.container -->
    </form>
</div>
</div>




</body>

</html>