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
        $mahallas = Mahalla::all();

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
        Environment::create($request->all());
        return redirect()->route('admin.environments')->with('msg', 'Muhit muvaffaqiyatli qo`shildi');
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
        $environment->update($request->all());
        return redirect()->route('admin.environments')->with('msg', 'Muhit muvaffaqiyatli yangilandi');
    }


    public function destroy(Environment $environment)
    {
        $environment->delete();
        return redirect()->route('admin.environments')->with('msg', 'Muhit muvaffaqiyatli o`chirildi');
    }
}
