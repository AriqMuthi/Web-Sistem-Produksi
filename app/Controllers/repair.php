<?php

namespace App\Controllers;

class repair extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Repair - Form Repair'
        ];
        return view('pages/repair', $data);
    }
}