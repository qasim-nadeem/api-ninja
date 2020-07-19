<?php


namespace App\Service;


use App\AppTable;

class AppTableService
{
    /**
     * @param string $tableName
     * @param int $appId
     * @return bool
     */
    public function addTableToApp(string $tableName, int $appId)
    {
        $appTable = new AppTable();
        $appTable->app_id = $appId;
        $appTable->table_name = $tableName;
        try {
            $appTable->save();
            return $appTable->id;
        }  catch (\Exception $e)
        {
            return false;
        }
    }
}
