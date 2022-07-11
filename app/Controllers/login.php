<?php

namespace App\Controllers;

use App\Models\M_login;
use App\Models\M_pasien;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function cekLogin()
    {
        $model = new M_login();
        $modelpsn = new M_pasien();
        $nohp = $this->request->getVar('nohp');
        $password = $this->request->getVar('password');

        $cek = $model->cekData($nohp);
        // dd($cek);

        if ($cek != null) {
            if ($cek['level'] == 'Admin') {
                $data_ses = [
                    'nama'      => $cek['Nama_user'],
                    'level'     => $cek['level'],
                    'log_in'    => true
                ];
                if ($cek['password'] == $password) {
                    session()->set($data_ses);
                    return redirect()->to('/puskesmas/admin');
                } else {
                    session()->setFlashdata('salah', 'Password anda salah');
                    return redirect()->to('/login');
                }
            } else {
                $kd = $modelpsn->cek($cek['No_hp'])->getRowArray();
                // dd($kd);
                $data_ses = [
                    'nama'      => $cek['Nama_user'],
                    'level'      => $cek['level'],
                    'log_in'    => true,
                    'kd_psn'    => $kd['kd_psn']
                ];
                if ($cek['password'] == $password) {
                    session()->set($data_ses);
                    return redirect()->to('/puskesmas');
                } else {
                    session()->setFlashdata('salah', 'Password anda salah');
                    return redirect()->to('/login');
                }
            }
        } else {
            session()->setFlashdata('gagal', 'No Handphone anda tidak valid');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/puskesmas');
    }
}
