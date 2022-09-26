<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table = 'kota';
    protected $allowedFields = ['id_kota', 'kota'];
    protected $primaryKey = 'id_kota';

    public function getKota($id_kota = false)
    {
        if ($id_kota == false) {
            return $this->findAll();
        }

        return $this->where(['id_kota' => $id_kota])->first();
    }
}
