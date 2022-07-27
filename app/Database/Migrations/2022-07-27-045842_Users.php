<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'user_password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'created_at'       => [
                'type'           => 'DATETIME',
                'null'     => true,
            ],
            'updated_at'       => [
                'type'           => 'DATETIME',
                'null'     => true,
            ]
        ]);
        $this->forge->addPrimaryKey('user_name', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}