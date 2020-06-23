<?php


namespace App\Service;


use App\AppId;

class AppIdGeneratorService
{
    /**
     * generate a unique appId for a new app in the system.
     *
     * @return integer
     */
    public function generateAppId()
    {
        $appId = AppId::first();
        AppId::first()->increment('number');
        return $appId->number;
    }
}
