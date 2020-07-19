<?php


namespace App\Service;


use App\AppTable;

class TableGeneratorService
{
    /**
     * @var AppService
     */
    private $appService;
    /**
     * @var MigrationService
     */
    private $migrationService;
    /**
     * @var TableService
     */
    private $tableService;
    /**
     * @var AppTableService
     */
    private $appTableService;

    /**
     * TableGeneratorService constructor.
     * @param AppService $appService
     * @param MigrationService $migrationService
     * @param AppTableService $appTableService
     */
    public function __construct(
        AppService $appService,
        MigrationService $migrationService,
        AppTableService $appTableService
    ){
        $this->appService = $appService;
        $this->migrationService = $migrationService;
        $this->appTableService = $appTableService;
    }

    /**
     * @param string $table_name
     * @return bool
     */
    public function generateTableForUsers(string $tableName)
    {
        $userApp = $this->appService->getAppForUser();
        try {
            $this->appTableService->addTableToApp($tableName, $userApp->id);
            $this->migrationService->createTable($userApp->id.'_'.$tableName);
            return true;
        } catch (\Exception $e)
        {
            dd($e);
            return false;
        }
    }

    /**
     * @param int $appId
     * @param string $tableName
     * @param array $columns
     * @return bool
     */
    public function generateTableWithColumnsForUser(int $appId,string $tableName, array $columns)
    {
        $userApp = $this->appService->getAppForUser();
        try {
            $this->appTableService->addTableToApp($tableName, $appId);
            $this->migrationService->createTableWithColumns(
                $userApp->id.'_'.$tableName,
                $columns
            );
            return true;
        } catch (\Exception $e)
        {
            return false;
        }
    }

    /**
     * create table metadata from the form submited to create new table for
     * guest user
     *
     * @param array $data
     */
    public function extractTableMetaData(array $data)
    {
        $tableName = $data['table-name'];
        unset($data['_token']);
        unset($data['table-name']);
        $tableMeta = [];
        $i = 0;
        for ($j = 0; $j<count($data); $j+=2)
        {
            $tableMeta[] = [
                'name' => $data['column-name-'.$i],
                'type' => $data['column-type-'.$i]
            ];
            $i++;
        }
        return [
            'tableName' => $tableName,
            'tableMeta' => $tableMeta
        ];
    }
}
