<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BiodataUser extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          => 'Silvi',
                'nip'           => '10993889748',
                'tmpt_lahir'    => 'Bandar Lampung',
                'tgl_lahir'     => '22/10/2001',
                'tempat_tugas'  => 'Kalianda',
                'jabatan'       => 'Kepala',
                'npwp'          => '12099287',
                'nama_rek'      => 'Silvi',
                'nomor_rek'     => '099877867',
                'nama_bank'     => 'Bank Negara Indonesia',
                'tempat_tinggal' => 'Lampung',
                'kab_kota'      => 'Bandar Lampung',
                'alamat_rumah'  => 'PErintis',
                'alamat_kantor' => 'Kalianda jaya',
                'telp'          => '083168152462',
            ],

            [
                'nama'          => 'nadia',
                'nip'           => '10993889748',
                'tmpt_lahir'    => 'Bandar Lampung',
                'tgl_lahir'     => '22/10/2001',
                'tempat_tugas'  => 'Kalianda',
                'jabatan'       => 'Kepala',
                'npwp'          => '12099287',
                'nama_rek'      => 'Silvi',
                'nomor_rek'     => '099877867',
                'nama_bank'     => 'Bank Negara Indonesia',
                'tempat_tinggal' => 'Lampung',
                'kab_kota'      => 'Bandar Lampung',
                'alamat_rumah'  => 'PErintis',
                'alamat_kantor' => 'Kalianda jaya',
                'telp'          => '083168152462',
            ],

            [
                'nama'          => 'bestie',
                'nip'           => '10993889748',
                'tmpt_lahir'    => 'Bandar Lampung',
                'tgl_lahir'     => '22/10/2001',
                'tempat_tugas'  => 'Kalianda',
                'jabatan'       => 'Kepala',
                'npwp'          => '12099287',
                'nama_rek'      => 'Silvi',
                'nomor_rek'     => '099877867',
                'nama_bank'     => 'Bank Negara Indonesia',
                'tempat_tinggal' => 'Lampung',
                'kab_kota'      => 'Bandar Lampung',
                'alamat_rumah'  => 'PErintis',
                'alamat_kantor' => 'Kalianda jaya',
                'telp'          => '083168152462',
            ],

            [
                'nama'          => 'nabilah',
                'nip'           => '10993889748',
                'tmpt_lahir'    => 'Bandar Lampung',
                'tgl_lahir'     => '22/10/2001',
                'tempat_tugas'  => 'Kalianda',
                'jabatan'       => 'Kepala',
                'npwp'          => '12099287',
                'nama_rek'      => 'Silvi',
                'nomor_rek'     => '099877867',
                'nama_bank'     => 'Bank Negara Indonesia',
                'tempat_tinggal' => 'Lampung',
                'kab_kota'      => 'Bandar Lampung',
                'alamat_rumah'  => 'PErintis',
                'alamat_kantor' => 'Kalianda jaya',
                'telp'          => '083168152462',
            ],

            [
                'nama'          => 'ghina',
                'nip'           => '10993889748',
                'tmpt_lahir'    => 'Bandar Lampung',
                'tgl_lahir'     => '22/10/2001',
                'tempat_tugas'  => 'Kalianda',
                'jabatan'       => 'Kepala',
                'npwp'          => '12099287',
                'nama_rek'      => 'Silvi',
                'nomor_rek'     => '099877867',
                'nama_bank'     => 'Bank Negara Indonesia',
                'tempat_tinggal' => 'Lampung',
                'kab_kota'      => 'Bandar Lampung',
                'alamat_rumah'  => 'PErintis',
                'alamat_kantor' => 'Kalianda jaya',
                'telp'          => '083168152462',
            ],

            [
                'nama'          => 'lulu',
                'nip'           => '10993889748',
                'tmpt_lahir'    => 'Bandar Lampung',
                'tgl_lahir'     => '22/10/2001',
                'tempat_tugas'  => 'Kalianda',
                'jabatan'       => 'Kepala',
                'npwp'          => '12099287',
                'nama_rek'      => 'Silvi',
                'nomor_rek'     => '099877867',
                'nama_bank'     => 'Bank Negara Indonesia',
                'tempat_tinggal' => 'Lampung',
                'kab_kota'      => 'Bandar Lampung',
                'alamat_rumah'  => 'PErintis',
                'alamat_kantor' => 'Kalianda jaya',
                'telp'          => '083168152462',
            ],

            [
                'nama'          => 'winda',
                'nip'           => '10993889748',
                'tmpt_lahir'    => 'Bandar Lampung',
                'tgl_lahir'     => '22/10/2001',
                'tempat_tugas'  => 'Kalianda',
                'jabatan'       => 'Kepala',
                'npwp'          => '12099287',
                'nama_rek'      => 'Silvi',
                'nomor_rek'     => '099877867',
                'nama_bank'     => 'Bank Negara Indonesia',
                'tempat_tinggal' => 'Lampung',
                'kab_kota'      => 'Bandar Lampung',
                'alamat_rumah'  => 'PErintis',
                'alamat_kantor' => 'Kalianda jaya',
                'telp'          => '083168152462',
            ]

        ];
        $this->db->table('biodata')->insertBatch($data);
    }
}