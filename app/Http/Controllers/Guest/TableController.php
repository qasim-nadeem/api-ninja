<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTableRequest;
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

    public function create(CreateTableRequest $request)
    {
        $tableData = $this->service->extractTableMetaData($request->all());
        $isSuccess = $this->service->generateTableWithColumnsForUser(
            $request->id,
            $tableData['tableName']
            ,$tableData['tableMeta']
        );

        if($isSuccess) {
            return redirect()->route('api.index.get',
                [
                    'appId' => $request->id,
                    'tableName' => $tableData['tableName']
                ]
            );
        }

        return redirect()
            ->route('home')
            ->with('error','Something happened, Our team is resolving the issue.');
    }
}
