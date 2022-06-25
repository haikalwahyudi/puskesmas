<?php

namespace App\Controllers;

use App\Models\M_pengguna;
use App\Models\M_poli;
use App\Models\M_dokter;
use App\Models\M_pasien;


class Puskesmas extends BaseController
{
    protected $M_pengguna;
    protected $M_poli;
    protected $M_dokter;
    protected $M_pasien;

    public function __construct()
    {
        $this->M_pengguna = new M_pengguna();
        $this->M_poli = new M_poli();
        $this->M_dokter = new M_dokter();
        $this->M_pasien = new M_pasien();
    }

    public function index()
    {
        return view('landingpage');
    }
    public function admin()
    {
        return view('/admin/v_beranda');
    }
    // Dokter
    public function ddokter()
    {
        $data = [
            'data'  => $this->M_dokter->ambilData()
        ];
        return view('admin/v_ddokter', $data);
    }
    public function tdokter()
    {
        return view('admin/v_tdokter');
    }
    public function tdokterAksi()
    {
        $this->M_dokter->simpan([
            'nm_dokter'     => $this->request->getVar('nama_dokter'),
            'kd_poli'       => $this->request->getVar('spesialis'),
            'jk'            => $this->request->getVar('jk'),
            'no_hp'         => $this->request->getVar('nohp'),
            'poto'          => $this->request->getVar('poto'),
            'hari_praktik'  => $this->request->getVar('hari'),
            'id'            => $this->request->getVar('jam'),
            'alamat'        => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('simpan', 'Data dokter berhasil disimpan');
        return redirect()->to('/puskesmas/tdokter');
    }
    public function hdokter($kd)
    {
        $poto = $this->M_dokter->ambilData($kd)->getRow();
        // dd($poto);
        if ($poto->poto != "default.png") {
            unlink('image/' . $poto->poto);
        }
        $this->M_dokter->hapus($kd);
        session()->setFlashdata('hapus', 'Data dokter berhasil dihapus');
        return redirect()->to('/puskesmas/ddokter');
    }
    public function udokter($kd)
    {
        $data = [
            'data'     => $this->M_dokter->ambilData($kd)->getRow(),
            'dpoli'     => $this->M_poli->ambilData(),
            'djadwal'   => $this->M_jadwal->ambilData(),
        ];
        return view('admin/v_udokter', $data);
    }
    // And Dokter

    // Pasien
    public function dpasien()
    {
        $data = [
            'data'  => $this->M_pasien->ambilData()
        ];
        return view('admin/v_dpasien', $data);
    }
    public function tpasien()
    {
        return view('admin/v_tpasien');
    }
    public function tpasienAksi()
    {
        $this->M_pasien->simpan([
            'nm_psn'    => $this->request->getVar('nama_pasien'),
            'jk'        => $this->request->getVar('jk'),
            'usia'      => $this->request->getVar('umur'),
            'nohp'      => $this->request->getVar('nohp'),
            'alamat'    => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('simpan', 'Data pasien berhasil disimpan');
        return redirect()->to('/puskesmas/tpasien');
    }
    public function upasien()
    {
        return view('admin/v_upasien');
    }
    public function hpasienAksi($kd_psn)
    {
        $this->M_pasien->hapus($kd_psn);
        session()->setFlashdata('hapus', 'Data pasien berhasil dihapus');
        return redirect()->to('/puskesmas/dpasien');
    }
    // And Pasien

    // Poli
    public function dpoli()
    {
        $data = [
            'data'  => $this->M_poli->ambilData()
        ];
        return view('admin/v_dpoli', $data);
    }
    public function tpoli()
    {
        return view('admin/v_tpoli');
    }
    public function tpoliAksi()
    {
        $this->M_poli->simpan([
            'nm_poli'   => $this->request->getVar('nm_poli'),
        ]);
        session()->setFlashdata('simpan', 'Data poli berhasil disimpan');
        return redirect()->to('/puskesmas/tpoli');
    }
    public function upoli($kd)
    {
        $data['data'] = $this->M_poli->ambilData($kd)->getRowArray();
        return view('admin/v_upoli', $data);
    }

    public function upoliAksi()
    {
        $kd = $this->request->getVar('kd_poli');

        $this->M_poli->ubah([
            'nm_poli'   => $this->request->getVar('nm_poli'),
        ], $kd);

        session()->setFlashdata('ubah', 'Data poli berhasil diubah');
        return redirect()->to('/puskesmas/dpoli');
    }

    public function hpoliAksi($id)
    {
        $this->M_poli->hapus($id);
        session()->setFlashdata('hapus', 'Data poli berhasil dihapus');
        return redirect()->to('/puskesmas/dpoli');
    }
    // And Poli
    // Pengguna
    public function dpengguna()
    {
        $data = [
            'data'  => $this->M_pengguna->ambilData()
        ];
        return view('admin/v_dpengguna', $data);
    }
    public function tpengguna()
    {
        return view('/admin/v_tpengguna');
    }
    public function upengguna($kd)
    {
        $data['dp'] = $this->M_pengguna->ambilData($kd)->getRowArray();
        // dd($data);

        return view('admin/v_upengguna', $data);
    }
    public function upenggunaAksi()
    {
        $kd = $this->request->getVar('kd');
        // dd($kd);
        $this->M_pengguna->ubah([
            'Nama_user'     => $this->request->getVar('nama_pengguna'),
            'email'         => $this->request->getVar('email'),
            'Jenis_kelamin' => $this->request->getVar('jk'),
            'No_hp'         => $this->request->getVar('nohp'),
            'password'      => $this->request->getVar('password'),
            'level'         => $this->request->getVar('level')
        ], $kd);
        session()->setFlashdata('ubah', 'Data berhasil diubah');
        return redirect()->to('/puskesmas/dpengguna');
    }
    public function tpengguna_aksi()
    {
        $this->M_pengguna->simpan([
            'Nama_user'     => $this->request->getVar('nama_pengguna'),
            'email'         => $this->request->getVar('email'),
            'Jenis_kelamin' => $this->request->getVar('jk'),
            'No_hp'         => $this->request->getVar('nohp'),
            'password'      => $this->request->getVar('password'),
            'level'         => $this->request->getVar('level')
        ]);
        session()->setFlashdata('sukses', 'Data berhasil disimpan');
        return redirect()->to('/puskesmas/tpengguna');
    }
    public function hpengguna($id)
    {
        $this->M_pengguna->hapus($id);
        session()->setFlashdata('hapus', 'Data berhasil dihapus');
        return redirect()->to('/puskesmas/dpengguna');
    }
    // And Pengguna

    // Daftar
    public function daftar()
    {
        return view('v_daftarpasien');
    }
    // And Daftar

    // Daftar Akun
    public function daftarAkun()
    {
        return view('daftarakun');
    }
    public function daftarAkunAksi()
    {
        $this->M_pengguna->simpan([
            'Nama_user'     => $this->request->getVar('nama'),
            'email'         => $this->request->getVar('email'),
            'Jenis_kelamin' => $this->request->getVar('jk'),
            'No_hp'         => $this->request->getVar('nohp'),
            'password'      => $this->request->getVar('password'),
            'level'         => 'pasien'
        ]);
        session()->setFlashdata('Berhasil', 'Akun berhasil dibuat');
        return redirect()->to('/puskesmas/daftarAkun');
    }
    // And Daftar Akun1
}
