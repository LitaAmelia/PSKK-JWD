<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nisn';
    protected $allowedFields = ['nama', 'nisn', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'agama', 'sekolah_asal', 'foto', 'status'];


    public function getSiswa($nisn = false)
    {
        if ($nisn === false) {
            return $this->table('siswa')->get()->getResultArray();
        } else {
            return $this->table('siswa')->where('siswa.nisn', $nisn)->get()->getRowArray();
        }
    }

    public function getDetail($nisn = false) //defaultnya false
    {
        if ($nisn == false) { //tidak ada slugnya, cari semua
            return $this->findAll();
        }

        return $this->where(['nisn' => $nisn])->first(); // jika ada, tampilkan data yang di pilih
    }

    public function insertSiswa($data)
    {
        $query = $this->db->table('siswa')->insert($data);
        return $query;
    }

    public function updateSiswa($data, $nisn)
    {
        return $this->db->table($this->table)->update($data, ['nisn' => $nisn]);
    }

    public function deleteSiswa($nisn)
    {
        return $this->db->table($this->table)->delete(['nisn' => $nisn]);
    }
}
