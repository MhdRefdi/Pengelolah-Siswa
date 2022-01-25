<?php

namespace App\Controllers;
use \App\Models\AdminModel;

class User extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    
    public function index()
    {
        return view('user/index');
    }

    public function data()
    {
        return view('user/detail');
    }

    public function siswa()
    {
        $nama = $this->request->getVar('nama');
        $slug = url_title($nama,'-',true);
        $find = $this->adminModel->where(['slug' => $slug])->first();
        $data = [
            'siswa' => $find
        ];

        if ($find != NULL) {
            return view('user/detail', $data);
        }

        return redirect()->to('/user/index');
    }
}
