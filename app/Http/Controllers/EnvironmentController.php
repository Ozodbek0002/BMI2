<?php

namespace App\Http\Controllers;

use App\Models\ { Environment, Mahalla };
use App\Http\Requests\StoreEnvironmentRequest;
use App\Http\Requests\UpdateEnvironmentRequest;

class EnvironmentController extends Controller
{

    public function index()
    {
        $environments = Environment::paginate(10);
        $mahallas = Mahalla::all()->except(1);

        return view('admin.environments.index', [
            'environments'=>$environments,
            'mahallas' => $mahallas,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(StoreEnvironmentRequest $request)
    {
        if ($request->count > $request->w_count+$request->y_count) {
            Environment::create($request->all());
            return redirect()->route('admin.environments')->with('msg', 'Muhit muvaffaqiyatli qo`shildi');
        }
        else{
            return redirect()->route('admin.environments')->withErrors( 'Muhitni ayollar soni va yoshlar sonini yig`indisi umumiy sondan katta bolmasligi kerak.');
        }
    }


    public function show(Environment $environment)
    {
        //
    }


    public function edit(Environment $environment)
    {
        //
    }


    public function update(UpdateEnvironmentRequest $request, Environment $environment)
    {
        if ($request->count > $request->w_count+$request->y_count) {
            $environment->update($request->all());
            return redirect()->route('admin.environments')->with('msg', 'Muhit muvaffaqiyatli yangilandi');
        }
        else{
            return redirect()->route('admin.environments')->withErrors( 'Muhitni ayollar soni va yoshlar sonini yig`indisi umumiy sondan katta bolmasligi kerak.');
        }

    }


    public function destroy(Environment $environment)
    {
        $environment->delete();
        return redirect()->route('admin.environments')->with('msg', 'Muhit muvaffaqiyatli o`chirildi');
    }
}
