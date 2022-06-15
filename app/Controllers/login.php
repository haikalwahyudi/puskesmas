<?php

namespace App\Controllers;

use App\Models\M_login;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function cekLogin()
    {
        $model = new M_login();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');


        $cek = $model->cekData($email);
        // dd($cek);

        if ($cek != null) {
            if ($cek['level'] == 'admin') {
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
                $data_ses = [
                    'nama'      => $cek['Nama_user'],
                    'leve'      => $cek['level'],
                    'log_in'    => true
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
            session()->setFlashdata('gagal', 'Email anda tidak valid');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/puskesmas');
    }
}
