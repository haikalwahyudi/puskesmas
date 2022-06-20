<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dokter extends Model{
	protected $table = "dokter";

	public function ambilData($kd=false)
	{
		if($kd === false){
			return $this->db->table($this->table)->get()->getResult();
		}else{
			return $this->getWhere(['kd_dokter' => $kd]);
		}
	}

	public function	simpan($data)
	{
		$simpan = $this->db->table($this->table);

		return $simpan->insert($data);
	}
}