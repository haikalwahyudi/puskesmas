<?php 
namespace App\models;

use CodeIgniter\model;

class M_pasien extends model
{
	protected $table = "pasien";

	public function ambilData($kd_psn = false)
	{
		if ($kd_psn === false) {
			return $this->db->table($this->table)->get()->getResult();
		}else{
			return $this->getWhere(['kd_psn' => $kd_psn]);
		}
	}
	public function simpan($data)
	{
		$simpan = $this->db->table($this->table);
		return $simpan->insert($data);
	}
}