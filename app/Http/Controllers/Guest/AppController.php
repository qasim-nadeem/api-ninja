<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAppRequest;
use App\Service\AppService;

class AppController extends Controller
{
    /**
     * @var AppService
     */
    private $service;

    /**
     * AppController constructor.
     * @param AppService $service
     */
    public function __construct(AppService $service)
    {
        $this->service = $service;
    }

    function create(CreateAppRequest $request)
    {
        $appId = $this->service->createNewApp($request->input('name'));
        return redirect()->route('table.create.get',['id' => $appId]);
    }
}
