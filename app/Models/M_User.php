<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table = "users";
    protected $primaryKey = "user_name";
    protected $returnType = "object";
    protected $useTimestamp = true;
    protected $allowedFields = [
        'user_email', 'user_name', 'user_password'
    ];
}