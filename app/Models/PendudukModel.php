<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table = 'data_kependudukan';
    protected $allowedFields = ['nama', 'tgl_lahir', 'id_desa', 'id_kecamatan', 'id_kota', 'id_provinsi', 'status'];
    protected $primaryKey = 'noktp';

    public function getPenduduk($noktp = false)
    {
        if ($noktp == false) {
            return $this->db->table('data_kependudukan')
                ->join('desa', 'desa.id_desa = data_kependudukan.id_desa')
                ->join('kecamatan', 'kecamatan.id_kecamatan = data_kependudukan.id_kecamatan')
                ->join('kota', 'kota.id_kota = data_kependudukan.id_kota')
                ->join('provinsi', 'provinsi.id_provinsi = data_kependudukan.id_provinsi')
                ->get()->getResultArray();
        }

        return $this->where(['noktp' => $noktp])->first();
    }
}
