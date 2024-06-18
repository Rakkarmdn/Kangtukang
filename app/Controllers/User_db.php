<?php

namespace App\Controllers;

use App\Models\Users;
use CodeIgniter\Controller;

class User_db extends Controller
{
    public function index()
    {
        $Users = new Users();
        $data['users'] = $Users->findAll();
        return view('Pages/user_dashboard', $data);
    }

    public function edit($id)
    {
        $Users = new Users();
        $data['user'] = $Users->find($id);
        return view('Pages/edit_user', $data);
    }

    public function update($id)
    {
        $Users = new Users();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'no_telp' => $this->request->getPost('no_telp')
        ];
        $Users->update($id, $data);
        return redirect()->to('/user_dashboard')->with('status', 'User update successfully');
    }

    public function delete($id)
    {
        $Users = new Users();
        $Users->delete($id);
        return redirect()->to('/user_dashboard')->with('status', 'User deleted successfully');
    }
}
