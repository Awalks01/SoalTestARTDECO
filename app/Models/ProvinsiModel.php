<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
    protected $table = 'provinsi';
    protected $allowedFields = ['id_provinsi', 'provinsi'];
    protected $primaryKey = 'id_provinsi';

    public function getProvinsi($id_provinsi = false)
    {
        if ($id_provinsi == false) {
            return $this->findAll();
        }

        return $this->where(['id_provinsi' => $id_provinsi])->first();
    }
}
