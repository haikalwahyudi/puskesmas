<?php

namespace App\Models;

use CodeIgniter\Model;

class M_poli extends model
{
	protected $table = "poli";

	public function ambilData($id = false)
	{
		if ($id === false) {
			return $this->db->table($this->table)->get()->getResult();
		} else {
			return $this->getWhere(['kd_poli' => $id]);
		}
	}

	public function simpan($data)
	{
		$simpan = $this->db->table($this->table);
		return $simpan->insert($data);
	}

	public function hapus($id)
	{
		$hapus = $this->db->table($this->table);
		return $hapus->delete(['kd_poli' => $id]);
	}

	public function ubah($data, $id)
	{
		$ubah = $this->db->table($this->table);
		$ubah->where(['kd_poli' => $id]);
		return $ubah->update($data);
	}
}
