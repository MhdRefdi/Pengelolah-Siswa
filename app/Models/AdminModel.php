<?php 
   namespace App\Models;
   use CodeIgniter\Model;

   class AdminModel extends Model
   {
      protected $table = 'siswa';
      protected $primaryKey = 'id_siswa';
      protected $allowedFields = ['nama_siswa', 'jenkel', 'alamat', 'slug', 'id_jurusan'];

      public function getSiswa($id = 1)
      {
         return $this->db->table('siswa')
         ->join('jurusan', 'jurusan.id = siswa.id_jurusan')
         ->where('id_jurusan', $id)
         ->get()->getResultArray();
      }
   }