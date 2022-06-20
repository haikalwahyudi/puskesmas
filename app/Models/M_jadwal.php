<?php

namespace App\Models;

use CodeIgniter\Model;

class M_jadwal extends model
{
	protected $table = "jadwal_praktek";

	public function ambilData($id = false)
	{
		if ($id === false) {
			return $this->db->table($this->table)->get()->getResult();
		} else {
			return $this->getWhere(['id' => $id]);
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
		return $hapus->delete(['id' => $id]);
	}

	public function ubah($data, $id)
	{
		$ubah = $this->db->table($this->table);
		$ubah->where(['id' => $id]);
		return $ubah->update($data);
	}
}
