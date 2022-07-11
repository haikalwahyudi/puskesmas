<?php

namespace App\Controllers;

use App\Models\M_pengguna;
use App\Models\M_poli;
use App\Models\M_dokter;
use App\Models\M_pasien;
use App\Models\M_jadwal;
use App\Models\M_pendaftaran;


class Puskesmas extends BaseController
{
    protected $M_pengguna;
    protected $M_poli;
    protected $M_dokter;
    protected $M_pasien;
    protected $M_jadwal;
    protected $M_pendaftaran;

    public function __construct()
    {
        $this->M_pengguna = new M_pengguna();
        $this->M_poli = new M_poli();
        $this->M_dokter = new M_dokter();
        $this->M_pasien = new M_pasien();
        $this->M_jadwal = new M_jadwal();
        $this->M_pendaftaran = new M_pendaftaran();
    }

    public function index()
    {
        // return view('template');
        return view('landingpage');
    }
    public function admin()
    {
        $jmlddokter = $this->M_dokter->ambilData();
        $jmlpoli = $this->M_poli->ambilData();
        $jmldpasien = $this->M_pasien->ambilData();

        $dp = 0;
        $jp = 0;
        $datapoli = 0;
        foreach ($jmldpasien as $jmlp) {
            $dp++;
        }
        foreach ($jmlddokter as $j) {
            $jp++;
        }
        foreach ($jmlpoli as $datap) {
            $datapoli++;
        }
        $data = [
            'datapoli'    => $datapoli,
            'jp'    => $jp,
            'dp'    => $dp
        ];
        return view('/admin/v_beranda', $data);
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
        $data = [
            'dpoli'     => $this->M_poli->ambilData(),
            'djadwal'   => $this->M_jadwal->ambilData(),
        ];
        return view('admin/v_tdokter', $data);
    }
    public function tdokterAksi()
    {
        $poto = $this->request->getFile('poto');
        $RName = $poto->getRandomName();
        $poto->move('image', $RName);
        $this->M_dokter->simpan([
            'nm_dokter'     => $this->request->getVar('nama_dokter'),
            'kd_poli'       => $this->request->getVar('spesialis'),
            'jk'            => $this->request->getVar('jk'),
            'no_hp'         => $this->request->getVar('nohp'),
            'poto'          => $RName,
            'hari_praktik'  => $this->request->getVar('hari'),
            'id'            => $this->request->getVar('jam'),
            'alamat'        => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('simpan', 'Data dokter berhasil disimpan');
        return redirect()->to('/puskesmas/tdokter');
    }
    public function hdokterAksi($kd)
    {
        $poto = $this->M_dokter->ambilData($kd)->getRow();
        // dd($poto);
        unlink('image/' . $poto->poto);
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
    public function udokterAksi()
    {
        $kd_dokter = $this->request->getVar('kd_dokter');
        $inputPoto = $this->request->getFile('poto');
        if ($inputPoto->getError() == 4) {
            $potoLama = $this->request->getVar('old_poto');
            $nmPoto = $potoLama;
        } else {
            $nmPoto = $inputPoto->getRandomName();
            $inputPoto->move('image/', $nmPoto);
            unlink('image/' . $this->request->getVar('old_poto'));
        }
        $this->M_dokter->ubah([
            'nm_dokter'     => $this->request->getVar('nama_dokter'),
            'kd_poli'       => $this->request->getVar('spesialis'),
            'jk'            => $this->request->getVar('jk'),
            'no_hp'         => $this->request->getVar('nohp'),
            'poto'          => $nmPoto,
            'hari_praktik'  => $this->request->getVar('hari'),
            'id'            => $this->request->getVar('jam'),
            'alamat'        => $this->request->getVar('alamat'),
        ], $kd_dokter);

        session()->setFlashdata('ubah', 'Data dokter berhasil diubah');
        return redirect()->to('puskesmas/ddokter');
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
    public function upasien($kd)
    {
        $data = [
            'data'  => $this->M_pasien->ambilData($kd)->getRow()
        ];
        return view('admin/v_upasien', $data);
    }
    public function upasienAksi()
    {
        $kd = $this->request->getVar('kd_psn');
        $this->M_pasien->ubah([
            'nm_psn'    => $this->request->getVar('nama_pasien'),
            'jk'        => $this->request->getVar('jk'),
            'usia'      => $this->request->getVar('umur'),
            'nohp'      => $this->request->getVar('nohp'),
            'alamat'    => $this->request->getVar('alamat'),
        ], $kd);
        session()->setFlashdata('ubah', 'Data pasien berhasil diubah');
        return redirect()->to('/puskesmas/dpasien');
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
        $data = [
            "poli" =>  $this->M_poli->ambilData(),
        ];
        // dd(date('Y-m-d', time() + (60 * 60 * 14)));
        //dd(date('mdHis'));
        return view('v_daftarpasien', $data);
    }
    // And Daftar

    public function simpan_antrian()
    {
        $tgl = $this->request->getVar('tgl_kunjungan');
        $poli = $this->request->getVar('kd_poli');
        $kd = session()->get('kd_psn');
        $db = \Config\Database::connect();
        // $ambilData = $db->query("SELECT * FROM pendaftaran WHERE kd_psn='$kd'")->getRow();
        // dd($ambilData->kd_psn);
        // if ($ambilData) {
        //     $this->M_pendaftaran->hapus($ambilData->kd_psn);
        // }
        $antri = $db->query("select max(no_antrian) as max from pendaftaran where kd_poli='$poli' and tgl_kunjungan='$tgl'")->getRowArray();
        // dd($antri['max']);
        $no_antrian = 1;
        if ($antri['max']) {
            $no_antrian = $antri['max'] + 1;
        }

        $this->M_pendaftaran->simpan([
            'no_pendaftaran'     => date('mdHis'),
            'kd_psn'             => session()->get('kd_psn'),
            'no_antrian'         => $no_antrian,
            'tgl_kunjungan'      => $this->request->getVar('tgl_kunjungan'),
            'tgl_pendaftaran'    => date('Y-m-d', time() + (60 * 60 * 14)),
            'kd_poli'            => $this->request->getVar('kd_poli'),
            'kategori'           => $this->request->getVar('kategori'),
            'pembayaran'         => $this->request->getVar('pembayaran'),
        ]);
        session()->setFlashdata('Berhasil', 'Pendaftaran berhasil, Silahkan cetak kartu antrian anda melalu menu <strong>Antrian</strong>');
        return redirect()->to('/puskesmas');
    }


    public function antrian()
    {
        $data = [
            "antrian" =>  $this->M_pendaftaran->ambilAntrian(session()->get('kd_psn')),
        ];
        // dd($data);
        return view('v_antrian', $data);
    }


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
            'level'         => 'Pasien'
        ]);

        $this->M_pasien->simpan([
            'nm_psn'        => $this->request->getVar('nama'),
            'nik'           => $this->request->getVar('nik'),
            'tempat_lahir'  => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'kelurahan'     => $this->request->getVar('kelurahan'),
            'jk'            => $this->request->getVar('jk'),
            'email'         => $this->request->getVar('email'),
            'nohp'          => $this->request->getVar('nohp'),
        ]);
        session()->setFlashdata('Berhasil', 'Akun berhasil dibuat, <strong>Silahkan Login</strong>');
        return redirect()->to('/login');
    }
    // And Daftar Akun1

    // Jadwal
    public function djadwal()
    {
        $data = [
            'data'  => $this->M_jadwal->ambilData()
        ];
        return view('/admin/v_jadwal', $data);
    }
    public function tjadwal()
    {
        return view('/admin/v_tjadwal');
    }
    public function tjadwalAksi()
    {
        $dariJam = $this->request->getVar('jam1');
        $sampaiJam = $this->request->getVar('jam2');
        $this->M_jadwal->simpan([
            'jam'   => $dariJam . "-" . $sampaiJam
        ]);
        session()->setFlashdata('simpan', 'Data jadwal berhasil disimpan');
        return redirect()->to('/puskesmas/tjadwal');
    }
    public function hjadwalAksi($id)
    {
        $this->M_jadwal->hapus($id);
        session()->setFlashdata('hapus', 'Data jadwal berhasil dihapus');
        return redirect()->to('/puskesmas/djadwal');
    }
    public function ujadwal($id)
    {
        $data = [
            'data'  => $this->M_jadwal->ambilData($id)->getRow()
        ];
        return view('/admin/v_ujadwal', $data);
    }
    public function ujadwalAksi()
    {
        $id = $this->request->getVar('id');
        $dariJam = $this->request->getVar('jam1');
        $sampaiJam = $this->request->getVar('jam2');
        // dd($dariJam, $sampaiJam);
        $this->M_jadwal->ubah([
            'jam'   => $dariJam . "-" . $sampaiJam
        ], $id);
        session()->setFlashdata('ubah', 'Data jadwal berhasil diubah');
        return redirect()->to('/puskesmas/djadwal');
    }
    // And Jadwal
    public function cetak($id)
    {
        $data = [
            'data'  => $this->M_pendaftaran->cariData($id)
        ];
        return view('v_cetakAntrian', $data);
    }
    public function dpendaftar()
    {
        $data = [
            'data'      => $this->M_pendaftaran->ambilData(),
        ];
        return view('admin/pendaftar/v_dpendaftar', $data);
    }
    public function cetakdaftar($id)
    {
        $data = [
            'data'  => $this->M_pendaftaran->cariData($id)
        ];
        // dd($data);
        return view('admin/pendaftar/v_cetakdaftar', $data);
    }
    public function dlaporan()
    {
        $data = [
            'data'  => $this->M_pendaftaran->ambilData()
        ];
        return view('admin/laporan/v_dlaporan', $data);
    }
}
