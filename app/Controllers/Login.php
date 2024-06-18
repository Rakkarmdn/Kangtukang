<?php 

namespace App\Controllers;

use App\Models\Users;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function login()
    {
        return view('Pages/login_user'); // Tampilkan halaman login
    }

    public function auth()
    {
        $session = session();
        $userModel = new Users();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            // Ambil password dari hasil pencarian
            $storedPassword = $user['password'];

            // Verifikasi password
            if ($password === $storedPassword) { 
                // Jika password benar, atur data sesi
                $ses_data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);

                // Redirect berdasarkan peran pengguna
                if ($user['username'] == 'admin') {
                    return redirect()->to('/dashboard');
                } else {
                    return redirect()->to('/page_user');
                }
            } else {
                // Jika password salah, set flash data error dan redirect ke halaman login
                $session->setFlashdata('error', 'Password Salah');
                return redirect()->to('/login');
            }
        } else {
            // Jika pengguna tidak ditemukan, set flash data error dan redirect ke halaman login
            $session->setFlashdata('error', 'Username Tidak Ditemukan');
            return redirect()->to('/login');
        }
    }
}
