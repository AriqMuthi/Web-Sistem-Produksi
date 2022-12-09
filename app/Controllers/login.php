<?php

namespace App\Controllers;

use App\Models\LoginModel;

class login extends BaseController
{
    protected $LoginModel;
    public function __construct() //agar method bisa digunakan di setiap mothod

    {
        $this->LoginModel = new LoginModel(); //Menyambungkan dengan Model
    }
    public function index()
    {
        helper(['form']);
        if (session('logged_in')) {
            return redirect()->to('/data');
        }
        return view('/login');
    }

    public function loginproses()
    {
        //validasi input
        if (
            !$this->validate([
                'username' => 'trim|required',
                'password' => 'trim|required'
            ])
        ) {
            session()->setFlashdata('pesan', 'Data tidak lengkap, silahkan isi kembali!');
            return redirect()->back();
        }
        $username = $this->request->getpost('username');
        $password = $this->request->getpost('password');
        $LoginModel = new LoginModel();

        $data = $LoginModel->where('username', $username)->first();

        if ($data) {
            if ($data['password'] == $password) {
                $ses_data = [
                    'nama' => $data['Nama'],
                    'id_devisi' => $data['Id_Devisi'],
                    'logged_in' => TRUE
                ];
                session()->set($ses_data);

                if ($data['Id_Devisi'] == 1) {
                    return redirect()->to('/data');
                } elseif ($data['Id_Devisi'] == 2) {
                    return redirect()->to('/data');
                } elseif ($data['Id_Devisi'] == 3) {
                    return redirect()->to('/input');
                }
            } else {
                session()->setFlashdata('pesan', 'Password yang di masukan salah');
                return redirect()->to('/');
            }
        } else {
            session()->setFlashdata('pesan', 'Email yang di masukan salah');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}