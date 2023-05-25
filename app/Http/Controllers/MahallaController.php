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


    public function create()
    {
        //
    }


    public function store(StoreMahallaRequest $request)
    {
        Mahalla::create($request->all());
        return redirect()->route('admin.mahallas')->with('msg', 'Mahalla muvaffaqiyatli yaratildi.');
    }


    public function show(Mahalla $mahalla)
    {
        //
    }


    public function edit(Mahalla $mahalla)
    {
       //
    }


    public function update(UpdateMahallaRequest $request, Mahalla $mahalla)
    {
        $mahalla->update($request->all());

        return redirect()->route('admin.mahallas')->with('msg', 'Mahalla muvaffaqiyatli yangilandi.');
    }


    public function destroy(Mahalla $mahalla)
    {
        $mahalla->delete();
        return redirect()->route('admin.mahallas')->with('msg', 'Mahalla muvaffaqiyatli o`chirildi.');
    }
}
