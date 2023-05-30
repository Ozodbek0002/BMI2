<?php

namespace App\Http\Controllers;

use App\Models\SocialStatus;
use App\Models\Mahalla;
use App\Http\Requests\StoreSocialStatusRequest;
use App\Http\Requests\UpdateSocialStatusRequest;

class SocialStatusController extends Controller
{

    public function index()
    {
        if (auth()->user()->id == 1) {
            $statuses = SocialStatus::paginate(10);
            $mahallas = Mahalla::all()->except(1);

        } else {
            $statuses = SocialStatus::where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();
        }
        return view('admin.statuses.index', [
            'statuses' => $statuses,
            'mahallas' => $mahallas,
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


    public function destroy($id)
    {

        SocialStatus::find($id)->delete();
        return redirect()->route('admin.statuses')->with('msg', 'Ma`lumot o`chirildi');
    }
}
