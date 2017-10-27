<?php

namespace App\Http\Controllers;

use App\Bunch;
use App\Campaign;
use App\Subscriber;
use App\User;
use App\Http\Requests\CampaignRequest;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaign = Campaign::latest()->where('created_by', Auth::user()->id);
        $campaigns = $campaign->orderBy('id', 'asc')->get();
        return view('campaign.index', compact('campaigns','templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Campaign $campaign, CampaignRequest $request)
    {
        $campaign->create($request->all())->user()->associate(Auth::user())->save();

        $request->session()->flash('flash_message', 'Campaign has been added');
        return redirect()->route('campaign.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        $subscribers = $campaign->bunch->subscribers;
        return view('campaign.show', compact('campaign','subscribers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        return view('campaign.edit', compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Campaign $campaign, CampaignRequest $request)
    {
        $campaign->update($request->all());
        \Session::flash('flash_message', 'Campaign has been updated');
        return redirect()->route('campaign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        \Session::flash('flash_message', 'Campaign has been deleted');
        return redirect()->route('campaign.index');
    }
}
