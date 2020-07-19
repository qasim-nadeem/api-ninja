<?php

namespace App\Http\Controllers;

use App\Service\AppTableService;
use App\Service\MigrationService;
use App\Service\TableGeneratorService;
use App\Service\TableService;
use Illuminate\Http\Request;

class MigrationController extends Controller
{
    /**
     * @var MigrationService
     */
    private $service;
    /**
     * @var TableService
     */
    private $tableService;

    /**
     * MigrationController constructor.
     * @param MigrationService $service
     * @param TableService $tableService
     */
    public function __construct(MigrationService $service, TableGeneratorService $tableService)
    {

        $this->service = $service;
        $this->tableService = $tableService;
    }

    //
    public function createTable()
    {
//        $columns = [
//            [
//                'name' => 'name',
//                'type' => 'string',
//                'length' => 255,
//                'nullable' => true
//            ],
//            [
//                'name' => 'age',
//                'type' => 'integer',
//                'length' => 8,
//                'nullable' => true
//            ]
//        ];
//        $this->service->createTableWithColumns('user_b',$columns);
//        $this->tableService->insertTableRow('user_b', ['name' => 'qasim', 'age' => 24]);
//        $rows = $this->tableService->getAllTableRows('user_b');
//        $this->tableService->updateTableRow('user_b',2,['name' => 'ali',]);

        dd($this->tableService->generateTableForUsers('ttable'));
        dd($this->tableService->deleteTableRow('user_b',1));
    }
}
