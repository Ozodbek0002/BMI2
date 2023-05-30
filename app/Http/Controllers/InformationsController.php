<?php

namespace App\Http\Controllers;

use App\Models\Informations;
use App\Models\Mahalla;
use App\Http\Requests\StoreInformationsRequest;
use App\Http\Requests\UpdateInformationsRequest;


class InformationsController extends Controller
{

    public function index()
    {
        if (auth()->user()->id == 1) {
            $informations = Informations::paginate(10);
            $mahallas = Mahalla::all()->except(1);

        } else {
            $informations = Informations::where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();
        }


        return view('admin.informations.index', [
            'informations' => $informations,
            'mahallas' => $mahallas,
        ]);

    }


    public function create()
    {
        //
    }


    public function store(StoreInformationsRequest $request)
    {
        Informations::create($request->all());
        return redirect()->route('admin.informations')->with('msg', 'Ma`lumotlar muvaffaqiyatli saqlandi');

    }


    public function show(Informations $informations)
    {
        //
    }


    public function edit(Informations $informations)
    {
        //
    }


    public function update(UpdateInformationsRequest $request, $id)
    {
        $information = Informations::find($id);
        $information->update($request->all());
        return redirect()->route('admin.informations')->with('msg', 'Ma`lumotlar muvaffaqiyatli yangilandi');

    }


    public function destroy($id)
    {
        $informations = Informations::find($id);
        $informations->delete();
        return redirect()->route('admin.informations')->with('msg', 'Ma`lumotlar muvaffaqiyatli o`chirildi');

    }
}
