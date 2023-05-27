<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahalla;

class RouteController extends Controller
{
    public function main()
    {
        return view('user.main');
    }

    public function mahallalar()
    {
        $mahallas = Mahalla::all()->except(1);
        return view('user.mahallalar',[
            'mahallas' => $mahallas,
        ]);
    }


    public function passport($id)
    {
        $mahalla = Mahalla::find($id);
        return view('user.passport',[
            'mahalla' => $mahalla,
        ]);


    }



}
