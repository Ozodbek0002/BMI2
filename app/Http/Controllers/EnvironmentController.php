<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use App\Http\Requests\StoreEnvironmentRequest;
use App\Http\Requests\UpdateEnvironmentRequest;

class EnvironmentController extends Controller
{

    public function index()
    {
        $environments = Environment::paginate(10);

        return view('admin.environments.index', [
            'environments'=>$environments,

        ]);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnvironmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Environment $environment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Environment $environment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnvironmentRequest $request, Environment $environment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Environment $environment)
    {
        //
    }
}
