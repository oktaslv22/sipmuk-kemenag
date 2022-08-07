<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pelatihan EMIS.xls");
?>

<html>

<body>
    <table border="1">
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

            </tr>
            <?php
            } ?>
            </tr>
        </tbody>
    </table>
</body>

</html>