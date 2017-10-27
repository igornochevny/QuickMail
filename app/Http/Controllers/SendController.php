<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Mail\QuickMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function store(Campaign $campaign)
    {
        $subscribers = $campaign->bunch->subscribers;
        foreach ($subscribers as $subscriber) {
            $recipients[] = $subscriber->email;
        }

        $data = array(
            'content' => $campaign->template->content

        );
            Mail::send('send.send', $data, function($message)use($campaign, $recipients) {
                $message->from($campaign->user->email, 'Info Header');
                $message->to($recipients);
            });


        \Session::flash('flash_message', 'Campaign has been sent');
        return redirect()->route('campaign.index');
    }
}
