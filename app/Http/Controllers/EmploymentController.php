<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use App\Http\Requests\StoreEmploymentRequest;
use App\Http\Requests\UpdateEmploymentRequest;

class EmploymentController extends Controller
{

    public function index()
    {
        $employments = Employment::paginate();

        return view('admin.employments.index', [
            'employments'=>$employments,
        ]);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmploymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employment $employment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employment $employment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmploymentRequest $request, Employment $employment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employment $employment)
    {
        //
    }
}
