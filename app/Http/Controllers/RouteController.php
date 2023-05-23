<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function main()
    {
        return view('user.main');
    }

    public function mahallalar()
    {
        return view('user.mahallalar');
    }



}
