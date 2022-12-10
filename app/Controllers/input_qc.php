<?php

namespace App\Controllers;

class input_qc extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Input - Form Input'
        ];
        return view('pages/input_qc', $data);
    }
}