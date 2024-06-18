<?php

namespace App\Controllers;

use App\Models\WorkersModel;
use CodeIgniter\Controller;

class Workers extends Controller
{
    public function index()
    {
        $workersModel = new WorkersModel();
        $data['workers'] = $workersModel->findAll();

        return view('Pages/page_user', $data);
    }
}
