<?php

namespace App\Controllers;

use App\Models\Users; 
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('Pages/register'); // Menampilkan view register
    }

    public function saveData()
    {
        // Membuat objek model Users
        $userModel = new Users();

        // Ambil data dari POST request
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $no_telp = $this->request->getPost('no_telp');

        // Validasi input
        if ($username && is_string($password) && $no_telp) {
            // Trim password jika nilai yang diterima adalah string
            $password = trim($password);


            // Data untuk disimpan
            $data = [
                'username' => $username,
                'password' => $password,
                'no_telp' => $no_telp,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            // Simpan data ke database
            $userModel->insert($data); // Memanggil metode insert dari model Users

            // Redirect atau tampilkan view dengan pesan sukses
            return redirect()->to('/login')->with('message', 'Registrasi Berhasil.');
            } else {
                // Redirect atau tampilkan view dengan pesan error
                return redirect()->to('/register')->with('error', 'Registrasi Gagal');
            }
    }

}
