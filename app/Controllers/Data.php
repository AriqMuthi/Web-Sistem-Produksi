<?php

namespace App\Controllers;

use App\Models\DataModel;

class data extends BaseController
{
    protected $dataModel; //agar variabel dataModel bisa digunakan di setiap mothod 
    public function __construct() //agar method bisa digunakan di setiap mothod

    {
        $this->dataModel = new DataModel(); //Menyambungkan dengan Model
    }
    public function index()
    {
        $dataa = $this->dataModel->findAll(); //Membaca semua data di database

        $data = [
            'title' => 'Data Produk',
            'data' => $dataa
        ];

        return view('pages/data', $data);
    }

    public function save()
    {

        //validasi input
        if (
            !$this->validate([
                'tgl' => 'required',
                'kotak' => 'required',
                'kode' => 'required',
                'total' => 'required'
            ])
        ) {
            session()->setFlashdata('pesan', 'Data tidak lengkap, silahkan isi kembali!');
            return redirect()->to('/input');
        }
        $this->dataModel->save([
            'created_at' => $this->request->getVar('tgl'),
            'kotak' => $this->request->getVar('kotak'),
            'kode' => $this->request->getVar('kode'),
            'total' => $this->request->getVar('total')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan.');

        return redirect()->to('/data');
    }
}