<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
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


    public function report($id)
    {
        $mahalla = Mahalla::find($id);

        $pdf = Pdf::loadView('user.report', compact("mahalla") );
        return $pdf->download('Mahalla-Passport-Report.pdf');

    }






}
