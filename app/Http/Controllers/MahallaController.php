<?php

namespace App\Http\Controllers;

use App\Models\Mahalla;
use App\Http\Requests\StoreMahallaRequest;
use App\Http\Requests\UpdateMahallaRequest;

class MahallaController extends Controller
{

    public function index()
    {
        $mahallas = Mahalla::paginate(10);

        return view('admin.mahallas.index', [
            'mahallas'=>$mahallas,
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
    public function store(StoreMahallaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahalla $mahalla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahalla $mahalla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahallaRequest $request, Mahalla $mahalla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahalla $mahalla)
    {
        //
    }
}
