<?php

namespace App\Controllers;

use App\Models\Data_qcModel;

class data_qc extends BaseController
{
    protected $data_qcModel; //agar variabel dataModel bisa digunakan di setiap mothod 
    public function __construct() //agar method bisa digunakan di setiap mothod

    {
        $this->data_qcModel = new Data_qcModel; //Menyambungkan dengan Model
    }
    public function index()
    {
        $dataa = $this->data_qcModel->findAll(); //Membaca semua data di database

        $data = [
            'title' => 'Data Produk',
            'data' => $dataa
        ];

        return view('pages/data_qc', $data);
    }
}