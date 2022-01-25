<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa'          => [
                'type'           => 'BIGINT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_siswa'       => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'alamat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'jenkel'       => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'id_jurusan'          => [
                'type'           => 'BIGINT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->addForeignKey('id_jurusan', 'jurusan', 'id');
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
