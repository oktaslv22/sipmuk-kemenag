<?php

namespace App\Models;

use CodeIgniter\Model;

class M_biodata3 extends Model
{
    protected $table = "biodata3";
    protected $primaryKey = "id_biodata";
    protected $returnType = "object";
    protected $allowedFields = [
        'nama', 'nip', 'tmpt_lahir', 'tgl_lahir', 'tempat_tugas', 'jabatan', 'npwp', 'nama_rek', 'nomor_rek', 'nama_bank', 'tempat_tinggal', 'kab_kota', 'alamat_rumah', 'alamat_kantor', 'telp'
    ];
    public function search($keyword)
    {
        $builder = $this->table('biodata3');
        $builder->like('nama', $keyword);
        $builder->like('nip', $keyword);
        return $builder;
    }
}