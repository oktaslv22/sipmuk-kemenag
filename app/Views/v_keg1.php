<?php
include 'dashboard.php';
?>

<head>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<div class="container-fluid">
    <!-- Notes -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pelatihan EMIS</h6>
            <a href="<?= site_url('admin/export1') ?>" class="btn btn-sm btn-outline-secondary"
                style="float: right;">Export
                <i class="fa fa-file-excel-o"></i></a>
        </div>
        <div class="card-body">
            <!-- ngambil dr kegiatan di home.php -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Tempat Tugas</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1 + (10 * ($currentPage - 1));
                        foreach ($biodata as $row) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->nip; ?></td>
                            <td><?= $row->jabatan; ?></td>
                            <td><?= $row->tempat_tugas; ?></td>
                            <td><?= $row->telp; ?></td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning fa fa-info" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal<?= $no ?>">
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $no ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark text-white">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>Formulir Biodata
                                                        Peserta</b>
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-1 row">
                                                    <label class="col-sm-5">Nama Lengkap</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->nama; ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label class="col-sm-5">NIP</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->nip; ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label class="col-sm-5">TTL</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->tmpt_lahir;  ?>">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="date" readonly class="form-control-plaintext"
                                                            value="<?= $row->tgl_lahir;  ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-1 row">
                                                    <label class="col-sm-5">Tempat Tugas</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->tempat_tugas; ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-1 row">
                                                    <label class="col-sm-5">Jabatan</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->jabatan; ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-1 row">
                                                    <label class="col-sm-5" for="alamat_rumah">Alamat Rumah</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->alamat_rumah; ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-1 row">
                                                    <label class="col-sm-5" for="alamat_kantor">Alamat
                                                        Kantor/Lembaga</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->alamat_kantor; ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-1 row">
                                                    <label class="col-sm-5">No. Telp/HP</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            value="<?= $row->telp; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <!-- <button type="button" class="btn btn-primary">Cetak</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?= base_url("admin/biodata/delete/$row->id_biodata") ?> "
                                    onclick="return confirm('Apakah yakin ingin menghapus data?')"><i
                                        class="btn btn-danger fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        } ?>
                        </tr>
                    </tbody>
                </table>
                <?= $pager->links('biodata', 'biodata_pagination'); ?>
            </div>
        </div>
    </div>
</div>
<script>

</script>