<?php


namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        return view('api.index',
            [
                'appId' => $request->appId,
                'tableName' => $request->tableName
            ]
        );
    }
}
