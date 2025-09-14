<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesanModel;
use CodeIgniter\HTTP\ResponseInterface;

class Advertising extends BaseController
{
    public function index(): string
    {
        $db = new PesanModel();
        $data['pesan'] = $db->getPesan('duniaadvertising');
        $data['averageRating'] = $db->getRating('duniaadvertising'); 
        return view('advertising', $data);
    }

    public function pesan()
    {
        $db = new PesanModel();
        $nama = $this->request->getVar('nama');
        $simpan = $db->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'deskripsi' => $this->request->getVar('pesan'),
            'rating' => $this->request->getVar('rating'),
            'status' => 'duniaadvertising'
        ]);
        
        session()->setFlashdata('pesan', 'Terimakasih telah memberi pesan');
        return redirect()->to('/duniaadvertising');
    }
}
