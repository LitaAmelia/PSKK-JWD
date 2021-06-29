<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $helpers = [];

    public function __construct()
    {
        helper(['form']);
        $this->siswaModel = new SiswaModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('admin/dashboard');
    }

    public function siswa()
    {
        $siswa = $this->siswaModel->getSiswa();
        $data = [
            'title' => 'Data Siswa',
            'siswa' => $siswa
        ];
        return view('admin/siswa', $data);
    }

    public function detail($nisn)
    {
        $siswa = $this->siswaModel->getSiswa($nisn);
        $data = [
            'title' => 'Detail Siswa',
            'siswa' => $siswa
        ];
        return view('admin/detail', $data);
    }

    public function edit($nisn)
    {
        $siswa = $this->siswaModel->getDetail($nisn);
        $data = [
            'title' => 'Edit Siswa',
            'siswa' => $siswa,
            'validation' => \Config\Services::validation()
        ];
        // dd($data);

        return view('admin/edit', $data);
    }

    public function update($nisn)
    {
        $request = service('request');
        $validation = \Config\Services::validation();
        $data = array(
            // 'nama' => $request->getVar('nama'),
            // 'nisn' => intval($request->getVar('nisn')),
            // 'tempat_lahir' => $request->getVar('tempat_lahir'),
            // 'tgl_lahir' => $request->getVar('tgl_lahir'),
            // 'jenis_kelamin' => $request->getVar('jenis_kelamin'),
            // 'agama' => $request->getVar('agama'),
            // 'sekolah_asal' => $request->getVar('sekolah_asal'),
            // 'nilai_mtk' => $request->getVar('nilai_mtk'),
            // 'nilai_inggris' => $request->getVar('nilai_inggris'),
            'status' => $request->getVar('status'),
        );
        if ($validation->run($data, 'siswaedit') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to('/admin/edit/' . $nisn)->withInput()->with('validation', $validation);
        } else {
            $ubah = $this->siswaModel->updateSiswa($data, $nisn);
            if ($ubah) {
                session()->setFlashdata('succes', 'Diubah!');
                return redirect()->to('/admin/siswa');
            }
        }
    }

    public function pengguna()
    {
        $user = $this->userModel->getUser();
        $data = [
            'title' => 'Detail Siswa',
            'user' => $user
        ];
        return view('admin/pengguna', $data);
    }
}
