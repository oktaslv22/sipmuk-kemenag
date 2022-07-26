<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'user_name', 'user_password', 'salt', 'avatar', 'role', 'created_by', 'created_date', 'updated_by', 'updated_date'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamp = false;

    // public function get_data($user_name, $user_password)
    // {
    //     return $this->db->table('login')
    //         ->where(array('user_name' => $user_name, 'user_password' => $user_password))
    //         ->get()->getRowArray();
    // }
}