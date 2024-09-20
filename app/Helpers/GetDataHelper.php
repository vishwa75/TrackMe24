<?php

namespace App\Helpers;
use App\Models\ExcludeColumnModel;

class GetDataHelper
{
    public function dataBaseConnection(){
        return \Config\Database::connect();
    }

    public function getExcludeColumn($table_name){
        $ExcludeColumnModel = new ExcludeColumnModel;
        $result = $ExcludeColumnModel->select('EXCLUDE_COLUMN')->where('UPPER(TABLE_NAME)', strtoupper($table_name))->findAll();
         
         $withCoumaString = '';
         foreach ($result as $row) {
            if (!empty($withCoumaString)) {
                $withCoumaString .= ',';
            }
            $withCoumaString .= $row['EXCLUDE_COLUMN'];
        }
        $columnList = explode(',', $withCoumaString);
        return $columnList;
    }

}
