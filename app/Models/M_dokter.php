<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dokter extends Model
{
	protected $table = "dokter";

	public function ambilData($kd = false)
	{
		if ($kd === false) {
			return $this->db->table($this->table)
				->join('poli', 'poli.kd_poli = dokter.kd_poli')
				->join('jadwal_praktek', 'jadwal_praktek.id = dokter.id')
				->get()->getResult();
		} else {
			return $this->getWhere(['kd_dokter' => $kd]);
		}
	}

	public function	simpan($data)
	{
		$simpan = $this->db->table($this->table);

		return $simpan->insert($data);
	}
	public function hapus($kd)
	{
		$hapus = $this->db->table($this->table);

		return $hapus->delete(['kd_dokter' => $kd]);
	}
	public function ubah($data, $kd)
	{
		$ubah = $this->db->table($this->table);
		$ubah->where(['kd_dokter' => $kd]);
		return $ubah->update($data);
	}
}
