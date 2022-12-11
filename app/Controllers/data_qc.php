<?php

namespace App\Controllers;

use App\Models\DataModel;

class data_qc extends BaseController
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

        return view('pages/data_qc', $data);
    }

    public function validasi($id)
    {
        $data = [
            'title' => 'Validasi Data',
            'produk' => $this->dataModel->getproduk($id)
        ];

        return view('pages/input_qc', $data);

    }

    public function save($id)
    {
        //validasi input
        if (
            !$this->validate([
                'oke' => 'required',
                'reject' => 'required',
                'repair' => 'required',
            ])
        ) {
            session()->setFlashdata('pesan', 'Data tidak lengkap, silahkan isi kembali!');
            return redirect()->to('/data_qc');
        }

        $this->dataModel->save([
            'id' => $id,
            'reject' => $this->request->getPost('reject'),
            'repair' => $this->request->getPost('repair'),
            'total' => $this->request->getPost('oke'),
            'validasi' => 1
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di Update.');

        return redirect()->to('/data_qc');
    }
}

// namespace App\Controllers;

// use App\Models\Data_qcModel;

// class data_qc extends BaseController
// {
// protected $data_qcModel; //agar variabel dataModel bisa digunakan di setiap mothod 
// public function __construct() //agar method bisa digunakan di setiap mothod

// {
//     $this->data_qcModel = new Data_qcModel; //Menyambungkan dengan Model
// }
// public function index()
// {
//     $dataa = $this->data_qcModel->findAll(); //Membaca semua data di database

//     $data = [
//         'title' => 'Data Produk',
//         'data' => $dataa
//     ];

//     return view('pages/data_qc', $data);
// }
// }