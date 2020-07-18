<?php


namespace App\Service;


use App\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AppService
{
    public function createNewApp(string $name)
    {
        $app = new App();
        $app->name = $name;
        $app->token = null;

        if(Auth::guest())
            $app->user_session_id = Session::getId();
        else
            $app->user_id = Auth::id();

        try {
            $app->save();
            return true;
        } catch (\Exception $e)
        {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getAppForUser()
    {
        if(Auth::guest())
        {
            $app = App::where('user_session_id',Session::getId())->first();
        }
        else
        {
            $app = App::where('user_id',Auth::user()->id)->first();
        }

        return $app;
    }

    public function isAppAlreadyExist(string $name)
    {
        if(Auth::check())
        {
            return App::where('name',$name)->where('user_id',Auth::id())->get()->count();
        }
        else
        {
            return App::where('name',$name)->where('user_session_id',Session::getId())->get()->count();
        }
    }
}
