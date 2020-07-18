<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppRequest;
use App\Service\AppService;
use Illuminate\Http\Request;

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
        $this->service->createNewApp($request->input('name'));
        dd('app cretaed');
    }
}
