<?php

namespace App\Models;

use CodeIgniter\Model;

class WartaModel extends Model
{
    protected $table = 'warta';
    protected $allowedFields = ['id', 'tema_warta', 'ayat_warta', 'isi_warta', 'tgl_warta', 'img'];
}
