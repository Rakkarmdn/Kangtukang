<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // Pastikan hanya admin yang bisa mengakses halaman ini
        if (session()->get('username') !== 'admin') {
            return redirect()->to('/page_user');
        }

        return view('Pages/dashboard'); // Buat tampilan dashboard untuk admin
    }

    public function add_worker()
    {
        return view('Pages/add_worker');
    }
}
