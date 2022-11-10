<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dashboard extends Model
{
    public function total_1()
    {
        return $this->db->table('biodata')->countAllResults();
    }

    public function total_2()
    {
        return $this->db->table('biodata2')->countAllResults();
    }

    public function total_3()
    {
        return $this->db->table('biodata3')->countAllResults();
    }
}