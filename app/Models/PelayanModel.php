<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayanModel extends Model
{
    protected $table = 'pelayan';
    protected $allowedFields = ['slug', 'nama_pelayan', 'singkatan_jabatan', 'jabatan_pelayan', 'intro', 'img'];
}
