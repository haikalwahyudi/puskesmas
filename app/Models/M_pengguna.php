<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pengguna extends Model
{
    protected $table = "user";

    public function ambilData($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table)->get()->getResultArray();
        } else {
            return $this->getWhere(['Kode_user' => $id]);
        }
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
    public function hapus($id)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->delete(['Kode_user' => $id]);
    }
    public function ubah($data, $id)
    {
        $ubah = $this->db->table($this->table);
        $ubah->where(['Kode_user' => $id]);
        return $ubah->update($data);
    }
}
