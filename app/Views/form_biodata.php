<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIPMUK - PELATIHAN EMIS</title>
</head>
<style>
form {
    background: #f9f9f9;
    border: 1px solid #c1c1c1;
    margin-top: 0, 5rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    padding: 1em;
}

body {
    background-color: #ffff;
    ;
}

.navbar {
    background-color: #004e15;

}
</style>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://lampung.kemenag.go.id/"><img
                    src="https://man1balam.sch.id/media_library/posts/post-image-1633590476146.png" alt="LOGO KANWIL"
                    width="55" height="50"></a>
        </div>
    </nav>
    <div class="container mt-3">
        <center>
            <h1><strong>BIODATA PESERTA</strong></h1>
            <h5>KEGIATAN PELATIHAN EMIS</h5>
        </center>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
            <?php endif; ?>

            <form id="form" method="POST" action="<?= base_url('/biodata/store') ?>">
                <div class="alert alert-secondary">
                    <strong>DATA DIRI</strong>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-5">Nama Lengkap</label>
                    <div class="col-sm-7">
                        <input type="text" name="nama" class="form-control" value="<?= old('nama') ?>"
                            placeholder="Nama Lengkap" required>
                    </div>
                </div>

                <div class="mb-1 row">
                    <label class="col-sm-5">Nomor Induk Pegawai</label>
                    <div class="col-sm-7">
                        <input type="text" name="nip" class="form-control" value="<?= old('nip') ?>" placeholder="NIP"
                            required>
                    </div>
                </div>

                <div class="mb-1 row">
                    <label class="col-sm-5">TTL</label>
                    <div class="col-sm-3">
                        <input type="text" name="tmpt_lahir" class="form-control" value="<?= old('tmpt_lahir') ?>"
                            placeholder="Tempat Lahir" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" max="2005-12-31" name="tgl_lahir" class="form-control"
                            value="<?= old('tgl_lahir') ?>" placeholder="Tanggal Lahir" required>
                    </div>
                </div>

                <div class="mb-1 row">
                    <label class="col-sm-5">Tempat Tugas</label>
                    <div class="col-sm-7">
                        <input type="text" name="tempat_tugas" class="form-control" value="<?= old('tempat_tugas') ?>"
                            placeholder="Tempat Tugas" required>
                    </div>
                </div>

                <div class="mb-1 row">
                    <label class="col-sm-5">Jabatan</label>
                    <div class="col-sm-7">
                        <input type="text" name="jabatan" class="form-control" value="<?= old('jabatan') ?>"
                            placeholder="Jabatan" required>
                    </div>
                </div>

                <!-- <div class="mb-1 row">
                    <label class="col-sm-5">NPWP</label>
                    <div class="col-sm-7">
                        <input type="text" name="npwp" class="form-control" value="<?= old('npwp') ?>"
                            placeholder="NPWP">
                    </div>
                </div>

                <div class="mb-1 row">
                    <label class="col-sm-5">Nama Rekening</label>
                    <div class="col-sm-7">
                        <input type="text" name="nama_rek" class="form-control" value="<?= old('nama_rek') ?>"
                            placeholder="Nama Rekening">
                    </div>
                </div>

                <div class="mb-1 row">
                    <label class="col-sm-5">Nomor Rekening</label>
                    <div class="col-sm-7">
                        <input type="text" name="nomor_rek" class="form-control" value="<?= old('nomor_rek') ?>"
                            placeholder="Nomor Rekening">
                    </div>
                </div> -->

                <!-- <div class="mb-1 row">
                    <label class="col-sm-5">Nama Bank</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="nama_bank" id="nama_bank">
                            <option>Pilih</option>
                            <option value="Bank Syariah Indonesia">Bank Syariah Indonesia</option>
                            <option value="Bank Negara Indonesia">Bank Negara Indonesia</option>
                            <option value="Bank Republik Indonesia">Bank Republik Indonesia</option>
                            <option value="Bank Mandiri">Bank Mandiri</option>
                        </select>
                    </div>
                </div> -->

                <!-- <div class="mb-1 row">
                    <label class="col-sm-5" for="tempat_tinggal">Tempat Tinggal</label>
                    <div class="col-sm-7">
                        <textarea id="tempat_tinggal" name="tempat_tinggal" class="form-control"
                            value="<?= old('tempat_tinggal') ?>" placeholder="Tempat Tinggal"></textarea>
                    </div>
                </div> -->
                <div class="mb-1 row">
                    <label class="col-sm-5" for="alamat_rumah">Alamat Rumah</label>
                    <div class="col-sm-7">
                        <textarea id="alamat_rumah" name="alamat_rumah" class="form-control"
                            value="<?= old('alamat_rumah') ?>" placeholder="Alamat Lengkap" required></textarea>
                    </div>
                </div>
                <div class="mb-1 row">
                    <label class="col-sm-5" for="alamat_kantor">Alamat Kantor/Lembaga</label>
                    <div class="col-sm-7">
                        <textarea id="alamat_kantor" name="alamat_kantor" class="form-control"
                            value="<?= old('alamat_kantor') ?>" placeholder="Alamat Kantor" required></textarea>
                    </div>
                </div>

                <div class="mb-1 row">
                    <label class="col-sm-5">No. Telp/HP</label>
                    <div class="col-sm-7">
                        <input type="text" name="telp" id="telp" class="form-control" value="<?= old('telp') ?>"
                            placeholder="No. Telp/HP" required>
                    </div>
                </div>

                <br>
                <div class="alert alert-secondary">
                    <input class="form-check-input" type="checkbox" value="" id="persetujuan" required="">
                    <label class="form-check-label col-sm-10" for="persetujuan">
                        Saya menyatakan bahwa data yang Saya isikan adalah benar.
                    </label>
                </div>
                <!-- <div class="alert alert-secondary">
                    <strong>
                        <input type="checkbox" name="pernyataan" id="pernyataan" required="">
                        Saya menyatakan bahwa data yang Saya isikan adalah benar.
                    </strong>
                </div> -->

                <center>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    <a type="cancel" name="cancel" href="<?= base_url('/') ?>" class="btn btn-danger">Cancel</a>
                </center>
            </form>

        </div>
    </div>
    <!-- SCRIPT JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script>
    // $('#simpanData').on('click', function() {
    //     alert('Terima kasih, Anda sudah terdaftar di kegiatan Pelatihan EMIS!:)');
    // });
    </script>
</body>

</html>