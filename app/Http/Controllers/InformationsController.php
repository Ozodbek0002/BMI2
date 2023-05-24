<?php

namespace App\Http\Controllers;

use App\Models\Informations;
use App\Http\Requests\StoreInformationsRequest;
use App\Http\Requests\UpdateInformationsRequest;

class InformationsController extends Controller
{

    public function index()
    {
        $informations = Informations::paginate(10);

        return view('admin.informations.index', [
            'informations'=>$informations,
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
    public function store(StoreInformationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Informations $informations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informations $informations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInformationsRequest $request, Informations $informations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informations $informations)
    {
        //
    }
}
