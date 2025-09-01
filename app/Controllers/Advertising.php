<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Advertising extends BaseController
{
    public function index(): string
    {
        return view('advertising');
    }
}
