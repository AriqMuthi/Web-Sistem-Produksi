<?php

namespace App\Controllers;

// use App\Models\DataModel;

class registrasi_admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Registrasi',
        ];
        return view('pages/registrasi_admin', $data);
    }
}