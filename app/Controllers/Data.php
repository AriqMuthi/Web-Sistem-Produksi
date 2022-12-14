<?php

namespace App\Controllers;

use App\Models\DataModel;

class data extends BaseController
{
    protected $dataModel; //agar variabel dataModel bisa digunakan di setiap mothod 
    public function __construct() //agar method bisa digunakan di setiap mothod

    {
        $this->dataModel = new DataModel; //Menyambungkan dengan Model
    }
    public function index()
    {
        $data = [
            'title' => 'Data Produk',
            'data' => $this->dataModel->getproduk()
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
            'tgl' => $this->request->getPost('tgl'),
            'kotak' => $this->request->getPost('kotak'),
            'kode' => $this->request->getPost('kode'),
            'total' => $this->request->getPost('total')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan.');

        return redirect()->to('/data');
    }
}