<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata2 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_biodata'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nip'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tmpt_lahir'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tgl_lahir'       => [
                'type'           => 'DATE',
                'null'          => true,
            ],
            'tempat_tugas'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jabatan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'npwp'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nama_rek'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nomor_rek'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nama_bank'       => [
                'type'           => 'ENUM',
                'constraint'     => "'Bank Syariah Indonesia','Bank Negara Indonesia','Bank Republik Indonesia','Bank Mandiri'",
            ],
            'tempat_tinggal'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'kab_kota'       => [
                'type'           => 'ENUM',
                'constraint'     => "'Bandar Lampung','Lampung Selatan','Lampung Timur','Lampung Tengah','Lampung Barat','Lampung Utara','Mesuji','Pesawaran','Pringsewu','Way Kanan','Metro','Tanggamus','Tulang Bawang Barat','Tulang Bawang','Pesisir Barat'"
            ],
            'alamat_rumah'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat_kantor'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'telp'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ]
        ]);
        $this->forge->addPrimaryKey('id_biodata');
        $this->forge->createTable('biodata2');
    }

    public function down()
    {
        $this->forge->dropTable('biodata2');
    }
}