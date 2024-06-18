<?php

namespace App\Controllers;

use App\Models\WorkersModel;
use CodeIgniter\Controller;

class Workers_db extends Controller
{
    public function index()
    {
        $workersModel = new WorkersModel();
        $data['workers'] = $workersModel->findAll();

        return view('Pages/workers_dashboard', $data);
    }

    public function create()
    {
        // Validasi input disini jika diperlukan

        $workersModel = new WorkersModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'ttl' => $this->request->getPost('ttl'),
            'domisili' => $this->request->getPost('domisili'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'pengalaman_kerja' => $this->request->getPost('pengalaman_kerja'),
            'no_telp' => $this->request->getPost('no_telp')
        ];

        $workersModel->insert($data);

        return redirect()->to('/workers_dashboard')->with('status', 'Worker created successfully');
    }

    public function edit($id)
    {
        $workersModel = new WorkersModel();
        $data['worker'] = $workersModel->find($id);

        if (empty($data['worker'])) {
            return redirect()->to('/workers_dashboard')->with('error', 'Worker not found');
        }

        return view('Pages/edit_worker', $data);
    }

    public function update($id)
    {
        $workersModel = new WorkersModel();
        $dataToUpdate = [
            'nama' => $this->request->getPost('nama'),
            'ttl' => $this->request->getPost('ttl'),
            'domisili' => $this->request->getPost('domisili'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'pengalaman_kerja' => $this->request->getPost('pengalaman_kerja'),
            'no_telp' => $this->request->getPost('no_telp')
        ];

        $workersModel->update($id, $dataToUpdate);

        return redirect()->to('/workers_dashboard')->with('status', 'Worker updated successfully');
    }

    public function delete($id)
    {
        $workersModel = new WorkersModel();
        $workersModel->delete($id);

        return redirect()->to('/workers_dashboard')->with('status', 'Worker deleted successfully');
    }

    public function add()
    {
        return view('Pages/add_worker');
    }
}
