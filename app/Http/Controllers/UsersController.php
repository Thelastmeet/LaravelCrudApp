<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    function index()
    {

        $collection = Http::get("https://live.nepse.repl.co/api.php");
        return view('share',['collection'=>$collection['live_data']]);
    }

    }

