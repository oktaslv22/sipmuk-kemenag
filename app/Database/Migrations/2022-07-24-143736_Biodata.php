<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
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
        $this->forge->createTable('biodata');
    }

    public function down()
    {
        $this->forge->dropTable('biodata');
    }
}