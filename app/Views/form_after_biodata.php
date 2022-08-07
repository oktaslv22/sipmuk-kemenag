<?php


$nama           = $_POST["nama"];
$nip            = $_POST["nip"];
$tmpt_lahir     = $_POST["tmpt_lahir"];
$tgl_lahir      = $_POST["tgl_lahir"];
$tempat_tugas   = $_POST["tempat_tugas"];
$jabatan        = $_POST["jabatan"];
$npwp           = $_POST["npwp"];
$nama_rek       = $_POST["nama_rek"];
$nomor_rek      = $_POST["nomor_rek"];
$nama_bank      = $_POST["nama_bank"];
$tempat_tinggal = $_POST["tempat_tinggal"];
$kab_kota       = $_POST["kab_kota"];
$alamat_rumah   = $_POST["alamat_rumah"];
$alamat_kantor  = $_POST["alamat_kantor"];
$telp           = $_POST["telp"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIPMUK KEMENAG</title>
</head>
<style>
form {
    background: #f9f9f9;
    border: 1px solid #c1c1c1;
    margin-top: 1rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    padding: 1em;
}
</style>

<body>
    <form id="form" method="POST" action="<?= base_url('#') ?>">
        <div class="container mt-3">
            <center>
                <h1><strong>FORM BIODATA DIRI</strong></h1>
                <h5>KEGIATAN PELATIHAN EMIS</h5>
            </center>
            <div class="alert alert-secondary">
                <strong>DATA DIRI</strong>
            </div>
            <div class="mb-2 row">
                <label class="col-sm-5">Nama Lengkap</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nama'] ?>" required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">Nomor Induk Pegawai</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nip'] ?>" required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">TTL</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['tmpt_lahir'] ?>"
                        required>
                </div>
                <div class="col-sm-3">
                    <input type="date" readonly class="form-control-plaintext" value="<?= $_POST['tgl_lahir'] ?>"
                        required>
                </div>
            </div>

            <!-- <div class="mb-2 row">
                    <label class="col-sm-5">Tanggal Lahir</label>
                    
                </div> -->

            <div class="mb-2 row">
                <label class="col-sm-5">Tempat Tugas</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['tempat_tugas'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">Jabatan</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['jabatan'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">NPWP</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['npwp'] ?>" required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">Nama Rekening</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nama_rek'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">Nomor Rekening</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nomor_rek'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">Nama Bank</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nama_bank'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5" for="tempat_tinggal">Tempat Tinggal</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['tempat_tinggal'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">Kabupaten/Kota</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['kab_kota'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5" for="alamat_rumah">Alamat Rumah</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['alamat_rumah'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5" for="alamat_kantor">Alamat Kantor/Lembaga</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['alamat_kantor'] ?>"
                        required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-sm-5">No. Telp/HP</label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['telp'] ?>" required>
                </div>
            </div>

            <center>
                <button type="submit" name="submit" class="btn btn-success" onclick="berhasil()">OK</button>
            </center>
</body>

</html>
<!-- Alert tombol OK -->
<script>
function berhasil() {
    alert("Terima kasih sudah mendaftar, silahkan download materi sesuai kegiatan yang anda daftarkan! :)");
}
</script>