<?php

namespace App\Models\UserModel;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'USERS';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['USERNAME', 'PASSWORD_HASH', 'EMAIL', 'PHONE', 'DOB', 'COUNTRY','START','IS_ACTIVE','CREATED_AT','UPDATED_AT'];

    public function getTableName()
    {
        return $this->table;
    }

}
