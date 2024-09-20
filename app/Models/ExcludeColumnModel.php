<?php

namespace App\Models;

use CodeIgniter\Model;

class ExcludeColumnModel extends Model
{
    protected $table = 'EXCLUDE_COLUMNS';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['TABLE_NAME', 'EXCLUDE_COLUMN'];

    public function getTableName()
    {
        return $this->table;
    }

}
