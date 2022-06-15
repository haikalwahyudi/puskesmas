<?php

namespace App\Models;

use CodeIgniter\Model;

class M_puskesmas extends Model
{
    protected $table = "user";

    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
}
