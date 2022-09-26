<?php

namespace App\Models;

use CodeIgniter\Model;

class DesaModel extends Model
{
    protected $table = 'desa';
    protected $allowedFields = ['id_desa', 'desa'];
    protected $primaryKey = 'id_desa';

    public function getDesa($id_desa = false)
    {
        if ($id_desa == false) {
            return $this->findAll();
        }

        return $this->where(['id_desa' => $id_desa])->first();
    }
}
