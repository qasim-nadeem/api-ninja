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
     * @param string $tableName
     * @param array $columns
     * @return bool
     */
    public function generateTableWithColumnsForUser(string $tableName, array $columns)
    {
        $userApp = $this->appService->getAppForUser();
        try {
            $this->appTableService->addTableToApp($tableName, $userApp->id);
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
}
