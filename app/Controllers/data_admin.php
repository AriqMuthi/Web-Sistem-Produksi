<?php

namespace App\Controllers;

use App\Models\DataModel;

class data_admin extends BaseController
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

        return view('pages/data_admin', $data);
    }
}