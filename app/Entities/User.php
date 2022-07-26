<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity\Entity
{
    public function setPassword(string $pass)
    {
        $salt = uniqid('', true);
        $this->attributes['salt'] = $salt;
        $this->attributes['user_password'] = md5($salt . $pass);
        return $this;
    }
}