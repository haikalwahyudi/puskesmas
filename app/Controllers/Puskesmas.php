<?php

namespace App\Controllers;

use App\Models\M_pengguna;


class Puskesmas extends BaseController
{
    protected $M_pengguna;

    public function __construct()
    {
        $this->M_pengguna = new M_pengguna();
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
        return view('admin/v_ddokter');
    }
    public function tdokter()
    {
        return view('admin/v_tdokter');
    }
    public function udokter()
    {
        return view('admin/v_udokter');
    }
    // And Dokter

    // Pasien
    public function dpasien()
    {
        return view('admin/v_dpasien');
    }
    public function tpasien()
    {
        return view('admin/v_tpasien');
    }
    public function upasien()
    {
        return view('admin/v_upasien');
    }
    // And Pasien

    // Poli
    public function dpoli()
    {
        return view('admin/v_dpoli');
    }
    public function tpoli()
    {
        return view('admin/v_tpoli');
    }
    public function upoli()
    {
        return view('admin/v_upoli');
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
    // And Daftar Akun
}
