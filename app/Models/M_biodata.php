<?php

namespace App\Models;

use CodeIgniter\Model;

class M_biodata extends Model
{
    protected $table = "biodata";
    protected $primaryKey = "id_biodata";
    protected $returnType = "object";
    protected $allowedFields = [
        'nama', 'nip', 'tmpt_lahir', 'tgl_lahir', 'tempat_tugas', 'jabatan', 'alamat_rumah', 'alamat_kantor', 'telp'
    ];
    public function search($keyword)
    {
        $builder = $this->table('biodata');
        $builder->like('nama', $keyword);
        $builder->like('nip', $keyword);
        return $builder;
    }
}