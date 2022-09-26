<?php

namespace App\Models;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
    protected $table = 'kecamatan';
    protected $allowedFields = ['id_kecamatan', 'kecamatan'];
    protected $primaryKey = 'id_kecamatan';

    public function getKecamatan($id_kecamatan = false)
    {
        if ($id_kecamatan == false) {
            return $this->findAll();
        }

        return $this->where(['id_kecamatan' => $id_kecamatan])->first();
    }
}
