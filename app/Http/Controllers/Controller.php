<?php

namespace TIST\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Auth\Guard;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public function __construct(Guard $auth)
    {
        $role = 'public';
        if($auth->check()){
            $role = 'admin';
        }
        // dd($role);
        \View::share('currentUserRole', $role);
    }
}
