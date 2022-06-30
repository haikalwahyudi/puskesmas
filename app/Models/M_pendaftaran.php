<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pendaftaran extends model
{
	protected $table = "pendaftaran";

	// public function ambilData($id = false)
	// {
	// 	if ($id === false) {
	// 		return $this->db->table($this->table)->get()->getResult();
	// 	} else {
	// 		return $this->getWhere(['kd_poli' => $id]);
	// 	}
	// }

	public function ambilAntrian($id)
	{
		$this->select('pendaftaran.* , poli.*, pasien.*');
		$this->join('poli', 'poli.kd_poli=pendaftaran.kd_poli');
		$this->join('pasien', 'pasien.kd_psn=pendaftaran.kd_psn');
		$this->where(['pendaftaran.kd_psn' => $id]);
		return $this->get()->getResultArray();
	}

	public function simpan($data)
	{
		$simpan = $this->db->table($this->table);
		return $simpan->insert($data);
	}

	// public function hapus($id)
	// {
	// 	$hapus = $this->db->table($this->table);
	// 	return $hapus->delete(['kd_poli' => $id]);
	// }

	// public function ubah($data, $id)
	// {
	// 	$ubah = $this->db->table($this->table);
	// 	$ubah->where(['kd_poli' => $id]);
	// 	return $ubah->update($data);
	// }
}
