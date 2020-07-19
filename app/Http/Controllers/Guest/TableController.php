<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Service\AppTableService;
use App\Service\MigrationService;
use App\Service\TableGeneratorService;
use App\Service\TableService;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * @var AppTableService
     */
    private $service;

    /**
     * TableController constructor.
     * @param TableGeneratorService $service
     */
    public function __construct(TableGeneratorService $service)
    {
        $this->service = $service;
    }

    public function index($id)
    {
        return view('table.guest.create',['appId' => $id]);
    }

    public function create(Request $request)
    {
        $tableData = $this->service->extractTableMetaData($request->all());
        $table = $this->service->generateTableWithColumnsForUser(
            $request->id,
            $tableData['tableName']
            ,$tableData['tableMeta']
        );
        dd($table);
    }
}
