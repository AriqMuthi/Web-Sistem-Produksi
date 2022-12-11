<?php

namespace App\Controllers;

use App\Models\LoginModel;

class registrasi_admin extends BaseController
{
    protected $LoginModel;

    public function __construct()
    {
        $this->LoginModel = new LoginModel;
    }
    public function index()
    {
        $data = [
            'title' => 'Registrasi',
        ];
        return view('pages/registrasi_admin', $data);
    }

    public function save()
    {
        if (
            !$this->validate([
                'username' => 'required',
                'password' => 'required',
                'nama' => 'required',
                'jabatan' => 'required'
            ])
        ) {
            session()->setFlashdata('pesan', 'Data tidak lengkap, silahkan isi kembali!');
            return redirect()->back();
        }
        $this->LoginModel->save([
            'Nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'Id_Devisi' => $this->request->getVar('jabatan')
        ]);

        session()->setFlashdata('err ', 'Data berhasil di tambahkan.');

        return redirect()->back();
    }
}