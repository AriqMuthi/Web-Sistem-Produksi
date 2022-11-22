<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
            'title'=>'Data - Tampilan Data'
        ];
        return view('pages/data',$data);
    }

    public function input()
    {
        $data=[
            'title'=>'Input - Form Input'
        ];
        return view('pages/input',$data);
    }

    public function repair()
    {
        $data=[
            'title'=>'Repair - Form Repair'
        ];
        return view('pages/repair',$data);
    }
}
