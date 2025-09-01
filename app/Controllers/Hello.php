<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Hello extends ResourceController
{
    public function index()
    {
        return $this->respond(['message' => 'Hello from CI4 API!']);
    }
}
