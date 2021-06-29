<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $helpers = [];

    public function __construct()
    {
        helper(['form']);
        $this->siswaModel = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('siswa/dashboard', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pendaftaran Siswa',
            'validation' => \Config\Services::validation()
        ];
        return view('siswa/create', $data);
    }

    public function save()
    {
        $request = service('request');
        $validation = \Config\Services::validation();
        $fileFoto = $this->request->getFile('foto');
        $name = $fileFoto->getRandomName();
        $data = array(
            'nama' => $request->getVar('nama'),
            'nisn' => intval($request->getVar('nisn')),
            'tempat_lahir' => $request->getVar('tempat_lahir'),
            'tgl_lahir' => $request->getVar('tgl_lahir'),
            'jenis_kelamin' => $request->getVar('jenis_kelamin'),
            'agama' => $request->getVar('agama'),
            'sekolah_asal' => $request->getVar('sekolah_asal'),
            'nilai_mtk' => $request->getVar('nilai_mtk'),
            'nilai_inggris' => $request->getVar('nilai_inggris'),
            'foto' => $name,
        );
        if ($validation->run($data, 'siswa') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to('/siswa/create')->withInput()->with('validation', $validation);
        } else {
            $fileFoto->move(ROOTPATH . 'public/uploads', $name);
            $simpan = $this->siswaModel->insertSiswa($data);
            if ($simpan) {
                session()->setFlashdata('succes', 'Ditambahkan!');
                return redirect()->to('/siswa/detail');
            }
        }
    }


    public function detail($nisn)
    {
        $data['siswa'] = $this->siswaModel->getSiswa($nisn);

        return view('siswa/detail2', $data);
    }

    public function update()
    {
        return view('siswa/update');
    }
}
