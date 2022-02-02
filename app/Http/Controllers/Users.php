<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user)
    {
        return ['name'=>"roshan",'age'=>"29"];  /*pass data like an api to view from controller */
       }
}
