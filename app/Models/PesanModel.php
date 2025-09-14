<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pesan';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama', 'email', 'rating', 'deskripsi', 'status'];

    public function getPesan($status)
    {
        return 
        $this->orderBy('rating', 'DESC')
        ->orderBy('id', 'DESC') 
        ->where('status' , $status)
        ->limit(3)
        ->find();
    }

    public function getRating($status)
    {
        return $this->selectAvg('rating', 'average_rating')
            ->where('status', $status)
            ->get()
            ->getRow()
            ->average_rating;
    }
}
