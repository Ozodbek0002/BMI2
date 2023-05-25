<?php

namespace App\Http\Controllers;

use App\Models\SocialStatus;
use App\Http\Requests\StoreSocialStatusRequest;
use App\Http\Requests\UpdateSocialStatusRequest;

class SocialStatusController extends Controller
{

    public function index()
    {
        $statuses = SocialStatus::paginate(10);

        return view('admin.statuses.index', [
            'statuses'=>$statuses,
        ]);

    }


    public function create()
    {
        //
    }


    public function store(StoreSocialStatusRequest $request)
    {
        SocialStatus::create($request->all());
        return redirect()->route('admin.statuses')->with('msg', 'Ma`lumot qo`shildi');
    }


    public function show(SocialStatus $socialStatus)
    {
        //
    }


    public function edit(SocialStatus $socialStatus)
    {
        //
    }


    public function update(UpdateSocialStatusRequest $request, SocialStatus $socialStatus)
    {
        $socialStatus->update($request->all());
        return redirect()->route('admin.statuses')->with('msg', 'Ma`lumot yangilandi');
    }


    public function destroy(SocialStatus $socialStatus)
    {
        $socialStatus->delete();
        return redirect()->route('admin.statuses')->with('msg', 'Ma`lumot o`chirildi');
    }
}
