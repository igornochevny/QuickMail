<?php

namespace App\Http\Controllers;


use App\Campaign;

use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function index(Campaign $campaign)
    {
        $subscribers = $campaign->bunch->subscribers;
        return view('campaign.preview', compact('campaign','subscribers'));
    }
}
