<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkersModel extends Model
{
    protected $table = 'workers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'ttl', 'domisili', 'pendidikan', 'pengalaman_kerja', 'no_telp', 'gambar'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
