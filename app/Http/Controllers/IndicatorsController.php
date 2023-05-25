<?php

namespace App\Http\Controllers;

use App\Models\{ Indicators, Mahalla };
use App\Http\Requests\StoreIndicatorsRequest;
use App\Http\Requests\UpdateIndicatorsRequest;

class IndicatorsController extends Controller
{

    public function index()
    {
        $indicators = Indicators::paginate(10);
        $mahallas = Mahalla::all();
        return view('admin.indicators.index', [
            'indicators'=> $indicators,
            'mahallas' => $mahallas,

        ]);
    }


    public function create()
    {
        //
    }


    public function store(StoreIndicatorsRequest $request)
    {
        Indicators::create($request->all());
        return redirect()->route('admin.indicators')->with('msg', 'Ko`rsatgich muvaffaqiyatli qo`shildi');
    }


    public function show(Indicators $indicators)
    {
        //
    }


    public function edit(Indicators $indicators)
    {
        //
    }


    public function update(UpdateIndicatorsRequest $request, Indicators $indicators)
    {
        $indicators->update($request->all());
        return redirect()->route('admin.indicators')->with('msg', 'Ko`rsatgich muvaffaqiyatli yangilandi');
    }


    public function destroy( $id )
    {
        Indicators::find($id)->delete();
        return redirect()->route('admin.indicators')->with('msg', 'Ko`rsatgich muvaffaqiyatli o`chirildi');
    }
}
