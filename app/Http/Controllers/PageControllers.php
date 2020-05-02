<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    function index ()
    {
        return view ('welcome');
    }

}