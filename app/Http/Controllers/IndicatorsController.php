<?php

namespace App\Http\Controllers;

use App\Models\{ Indicators, Mahalla };
use App\Http\Requests\StoreIndicatorsRequest;
use App\Http\Requests\UpdateIndicatorsRequest;

class IndicatorsController extends Controller
{

    public function index()
    {
        if (auth()->user()->id == 1) {
            $indicators = Indicators::paginate(10);
            $mahallas = Mahalla::all()->except(1);
        }
        else{
            $indicators = Indicators::where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();
        }
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
        if ($request->count > $request->w_count){
        Indicators::create($request->all());
        return redirect()->route('admin.indicators')->with('msg', 'Ko`rsatgich muvaffaqiyatli qo`shildi');
        }
        else{
            return redirect()->route('admin.indicators')->withErrors( 'Ko`rsatgichni ayollar soni umumiy sondan katta bolmasligi kerak.');
        }
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
        if ($request->count > $request->w_count) {
            $indicators->update($request->all());
            return redirect()->route('admin.indicators')->with('msg', 'Ko`rsatgich muvaffaqiyatli yangilandi');
        }
        else{
            return redirect()->route('admin.indicators')->withErrors( 'Ko`rsatgichni ayollar soni umumiy sondan katta bolmasligi kerak.');
        }
    }


    public function destroy( $id )
    {
        Indicators::find($id)->delete();
        return redirect()->route('admin.indicators')->with('msg', 'Ko`rsatgich muvaffaqiyatli o`chirildi');
    }
}
