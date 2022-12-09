<?php

namespace App\Controllers;

class input extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Input - Form Input'
        ];
        return view('pages/input', $data);
    }
}