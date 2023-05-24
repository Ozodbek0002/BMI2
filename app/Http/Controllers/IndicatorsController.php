<?php

namespace App\Http\Controllers;

use App\Models\Indicators;
use App\Http\Requests\StoreIndicatorsRequest;
use App\Http\Requests\UpdateIndicatorsRequest;

class IndicatorsController extends Controller
{

    public function index()
    {
        $indicators = Indicators::paginate(10);

        return view('admin.indicators.index', [
            'indicators'=> $indicators,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndicatorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Indicators $indicators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indicators $indicators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndicatorsRequest $request, Indicators $indicators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indicators $indicators)
    {
        //
    }
}
