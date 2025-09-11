<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pesan';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama', 'email', 'rating', 'deskripsi'];

    public function getPesan()
    {
        return 
        $this->orderBy('rating', 'DESC')
        ->orderBy('id', 'DESC') 
        ->limit(3)
        ->find();
    }
}
