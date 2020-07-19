<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Service\AppTableService;
use App\Service\MigrationService;
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
     * @param AppTableService $service
     */
    public function __construct(AppTableService $service)
    {
        $this->service = $service;
    }

    public function index($id)
    {
        return view('table.guest.create',['appId' => $id]);
    }
    public function create(Request $request)
    {
        dd($request->all());
        $tableId = $this->service->addTableToApp($request->input('name'),$request->id);
    }
}
