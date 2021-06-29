<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->table('user')->get()->getResultArray();
        } else {
            return $this->table('user')->where('user.id', $id)->get()->getRowArray();
        }
    }

    public function cek_login($username)
    {
        $query = $this->table('user')
            ->where('username', $username)
            ->countAll();

        if ($query >  0) {
            $hasil = $this->table('user')
                ->where('username', $username)
                ->limit(1)
                ->get()
                ->getRowArray();
        } else {
            $hasil = array();
        }
        return $hasil;
    }

    public function register($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
