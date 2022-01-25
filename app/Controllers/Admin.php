<?php

namespace App\Controllers;
use \App\Models\AdminModel;
use \App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class Admin extends BaseController
{
    protected $adminModel;
    protected $userModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->userModel = new UserModel();
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $result = $this->userModel->where(['username' => $username])->first();

        if ($result != NULL) {
            if ($result['password'] == $password) {
                session()->set('login', true);
                return redirect()->to('/admin/home');
            }
            return redirect()->to('/');
        }else {
            return redirect()->to('/');
        }
    }
    
    public function home()
    {
        if (!session('login')) {
            return redirect()->to('/');
        }
        
        return view('dashboard/home');
    }

    public function siswa($id)
    {
        if (!session('login')) {
            return redirect()->to('/');
        }

        $data = [
            'id' => $id,
            'siswa' => $this->adminModel->getSiswa($id),

        ];
        return view('dashboard/siswa', $data);
    }

    public function create($id)
    {   
        if (!session('login')) {
            return redirect()->to('/');
        }

        $data = [
            'id' => $id,
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/create', $data);
    }

    public function save($id)
    {   
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[siswa.nama_siswa]',
                'errors' => [
                    'required' => 'bidang harus diisi!',
                    'is_unique' => 'nama sudah terdaftar'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'bidang harus diisi!'
                ]
            ]
        ])) {
            return redirect()->to('/admin/add/' . $id)->withInput();
        }
        
        $slug = url_title($this->request->getVar('nama'),'-',true);
        
        $this->adminModel->save([
            'nama_siswa' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'jenkel' => $this->request->getVar('jenkel'),
            'slug' => $slug,
            'id_jurusan' => $id,
        ]);

        return redirect()->to('/admin/siswa/' . $id);
    }

    public function delete($id, $page)
    {
        if (!session('login')) {
            return redirect()->to('/');
        }

        $this->adminModel->delete($id);
        return redirect()->to('/admin/siswa/' . $page);
    }

    public function edit($id, $slug)
    {   
        if (!session('login')) {
            return redirect()->to('/');
        }
        
        $siswa = $this->adminModel->where(['slug' => $slug])->first();

        $data = [
            'id' => $id,
            'validation' => \Config\Services::validation(),
            'siswa' => $siswa
        ];

        return view('dashboard/edit', $data);
    }

    public function update($page, $id)
    {   
        $dataLama = $this->adminModel->where(['id_siswa' => $id])->first();
        if ($dataLama['nama_siswa'] == $this->request->getVar('nama')) {
            $rules = 'required';
        }else {
            $rules = 'required|is_unique[siswa.nama_siswa]';
        }
        
        if (!$this->validate([
            'nama' => [
                'rules' => $rules,
                'errors' => [
                    'required' => 'bidang harus diisi!',
                    'is_unique' => 'nama sudah terdaftar'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'bidang harus diisi!'
                ]
            ]
        ])) {
            return redirect()->to('/admin/edit/' . $page . '/' . $dataLama['slug'])->withInput();
        }
        
        $slug = url_title($this->request->getVar('nama'),'-',true);
        
        $this->adminModel->save([
            'id_siswa' => $id,
            'nama_siswa' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'jenkel' => $this->request->getVar('jenkel'),
            'slug' => $slug,
            'id_jurusan' => $this->request->getVar('id_jurusan'),
        ]);

        return redirect()->to('/admin/siswa/' . $page);
    }

    public function logout()
    {
        session()->remove('login');
        return redirect()->to('/');
    }
}
