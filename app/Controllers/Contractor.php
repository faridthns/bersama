<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PesanModel;


class Contractor extends BaseController
{
    public function index(): string
    {
        $db = new PesanModel();
        $data['pesan'] = $db->getPesan('bintarajayapersada');
        $data['averageRating'] = $db->getRating('bintarajayapersada'); 
        return view('contractor',$data);
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
            'status' => 'bintarajayapersada'
        ]);
        
        session()->setFlashdata('pesan', 'Terimakasih telah memberi pesan');
        return redirect()->to('/bintarajayapersada');
    }
}
