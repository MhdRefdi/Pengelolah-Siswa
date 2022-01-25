<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jurusan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_jurusan' => 'RPL'
            ],
            [
                'nama_jurusan' => 'TKJ'
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('jurusan')->insertBatch($data);
    }
}