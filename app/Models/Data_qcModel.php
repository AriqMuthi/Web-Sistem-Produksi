<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_qcModel extends Model
{
    protected $table = 'data_qc';
    protected $allowedFields = [
        'created_at',
        'updated_at',
        'kotak',
        'kode',
        'tot_ok',
        'reject',
        'repair'
    ];
    protected $useTimestamps = true;
}