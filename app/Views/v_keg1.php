<?php
include 'dashboard.php';
?>


<div class="container-fluid">
    <!-- Notes -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pelatihan EMIS</h6>
            <button onclick="window.print()" type="button" class="btn btn-sm btn-outline-secondary"
                style="float: right;">Download
                <i class="fa fa-print"></i></button>
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
                                <a href="<?= base_url("#") ?> "><i class="btn btn-warning fa fa-print"></i></a>
                                <a href="<?= base_url("biodata/delete/$row->id_biodata") ?> "
                                    onclick="return confirm('Apakah yakin ingin menghapus data?')"><i
                                        class="btn btn-danger fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        } ?>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>