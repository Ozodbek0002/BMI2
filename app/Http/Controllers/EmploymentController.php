<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use App\Models\Mahalla;
use App\Http\Requests\StoreEmploymentRequest;
use App\Http\Requests\UpdateEmploymentRequest;

class EmploymentController extends Controller
{

    public function index()
    {
        $employments = Employment::paginate();
        $mahallas = Mahalla::all();

        return view('admin.employments.index', [
            'employments'=>$employments,
            'mahallas'=>$mahallas,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(StoreEmploymentRequest $request)
    {
        Employment::create($request->all());
        return redirect()->route('admin.employments')->with('msg', 'Ma`lumotlar muvaffaqiyatli saqlandi');
    }


    public function show(Employment $employment)
    {
        //
    }


    public function edit(Employment $employment)
    {
        //
    }


    public function update(UpdateEmploymentRequest $request, Employment $employment)
    {
        $employment->update($request->all());
        return redirect()->route('admin.employments')->with('msg', 'Ma`lumotlar muvaffaqiyatli yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employment $employment)
    {
        $employment->delete();
        return redirect()->route('admin.employments')->with('msg', 'Ma`lumotlar muvaffaqiyatli o`chirildi');
    }
}
