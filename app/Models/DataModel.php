<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Stmt\Return_;

class DataModel extends Model
{
    protected $table = 'data';
    protected $allowedFields = [
        'kotak',
        'kode',
        'total',
        'tgl',
        'reject',
        'repair',
        'validasi'
    ];
    protected $useTimestamps = true;

    public function getproduk($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();

    }
}