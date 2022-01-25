<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_jurusan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('jurusan');
    }

    public function down()
    {
        $this->forge->dropTable('jurusan');
    }
}
