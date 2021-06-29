<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SiswaModel;

class Auth extends BaseController
{
    protected $helper = [];

    public function __construct()
    {
        helper(['form']);
        $this->cek_login();
        $this->userModel = new UserModel();
        $this->siswaModel = new SiswaModel();
    }

    public function index()
    {
        if ($this->cek_login() == TRUE) {
            return redirect()->to('/dashboard');
        }
        echo view('auth/login');
    }

    public function login()
    {
        if ($this->cek_login() == TRUE) {
            return redirect()->to('/dashboard');
        }
        echo view('auth/login');
    }

    public function proses_login()
    {
        $validation =  \Config\Services::validation();
        $session = session();

        // $username  = $this->request->getPost('username');
        // $pass   = $this->request->getPost('password');

        $nisn = $this->request->getVar('nisn');
        $data = $this->siswaModel->where('nisn', $nisn)->first();
        $role = $data['role'];

        if ($data) {
            $ses_data = [
                'user_id'       => $data['user_id'],
                'user_name'     => $data['user_name'],
                'nama_lengkap'  => $data['nama_lengkap'],
                'status'        => $data['status'],
                'logged_in'     => TRUE
            ];
            $session->set($ses_data);
        }


        $data = [
            // 'username' => $username,
            // 'password' => $pass,
            'nisn' => $nisn
        ];

        if ($validation->run($data, 'authlogin') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to('/auth/login');
        } else {

            $cek_login = $this->siswaModel->cek_login($nisn);

            // username didapatkan
            if ($cek_login == TRUE) {

                // // jika username dan password cocok
                // if ($nisn, $cek_login['nisn']) {

                //     // session()->set('username', $cek_login['username']);
                //     // session()->set('nama_depan', $cek_login['nama_depan']);
                //     // session()->set('nama_belakang', $cek_login['nama_belakang']);
                //     // session()->set('level', $cek_login['level']);
                //     // session()->set('status', $cek_login['status']);
                //     session()->set('nisn', $cek_login['nisn']);

                return redirect()->to('/dashboard');
                // username cocok, tapi password salah
            } else {
                // username tidak cocok / tidak terdaftar
                session()->setFlashdata('errors', ['' => 'Username yang Anda masukan tidak terdaftar']);
                return redirect()->to('/auth/login');
            }
        }
    }

    public function register()
    {
        if ($this->cek_login() == TRUE) {
            return redirect()->to('/dashboard');
        }
        return view('auth/register');
    }

    public function proses_register()
    {
        $validation =  \Config\Services::validation();

        $data = [
            'nama_depan'              => $this->request->getPost('nama_depan'),
            'nama_belakang'              => $this->request->getPost('nama_belakang'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'confirm_password'  => $this->request->getPost('confirm_password')
        ];

        if ($validation->run($data, 'authregister') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            session()->setFlashdata('inputs', $this->request->getPost());
            return redirect()->to('/auth/register');
        } else {

            $datalagi = [
                'nama_depan'        => $this->request->getPost('nama_depan'),
                'nama_belakang'     => $this->request->getPost('nama_belakang'),
                'username'          => $this->request->getPost('username'),
                'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'status'        => "Active",
                'level'         => "User"
            ];

            $simpan = $this->auth_model->register($datalagi);

            if ($simpan) {
                session()->setFlashdata('success_register', 'Register Successfully');
                return redirect()->to('/auth/login');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
