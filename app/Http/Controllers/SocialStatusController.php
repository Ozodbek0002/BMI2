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
    public function store(StoreSocialStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialStatus $socialStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialStatus $socialStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialStatusRequest $request, SocialStatus $socialStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialStatus $socialStatus)
    {
        //
    }
}
