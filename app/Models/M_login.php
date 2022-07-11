<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    protected $table = "user";

    public function cekData($nohp)
    {
        return $this->db->table($this->table)
            ->where([
                'No_hp' => $nohp,
            ])->get()->getRowArray();
    }
}
