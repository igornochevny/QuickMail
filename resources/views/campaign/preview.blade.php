@extends('layouts.panel')
<?php
/** @var \App\Campaign $campaign */
?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{route('campaign.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> back
            </a>
            <div class="text-center col-md-9 col-sm-7 col-xs-6">Campaign PREVIEW: <b>{{$campaign->name}}</b></div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="pull-right">
                    {{Form::open(['class' => 'confirm-delete', 'route' => ['campaign.destroy', $campaign->id], 'method' => 'DELETE'])}}
                    {{ link_to_route('campaign.edit', 'edit', [$campaign->id], ['class' => 'btn btn-primary btn-xs']) }} |
                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-responsive">
            <tr>
                <td>Subject</td>
                <td>{{$campaign->name}}</td>
            </tr>
            <tr>
                <td>To</td>
                <td>
                @foreach($subscribers as $subscriber)
                    <b>{{$subscriber->email}}</b>
                @endforeach
                </td>
            </tr>
            <tr>
                <td>From</td>
                <td>{{$campaign->user->email}}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>
                    <iframe width="100%" height="300"
                            srcdoc="<!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;>
<html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;>
<head>
<meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;>
<meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot;>
</head>
<body style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; color: #74787E; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;&quot;>
    <style>
        @media  only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media  only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
<table class=&quot;wrapper&quot; width=&quot;100%&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;&quot;><tr>
<td align=&quot;center&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;&quot;>
                <table class=&quot;content&quot; width=&quot;100%&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;&quot;>
<tr>
<td class=&quot;header&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;&quot;>
        <a href=&quot;http://laravel5.grassbusinesslabs.tk/&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #bbbfc3; font-size: 19px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 white;&quot;>
            QuickMail
        </a>
    </td>
</tr>
<!-- Email Body --><tr>
<td class=&quot;body&quot; width=&quot;100%&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;&quot;>
                            <table class=&quot;inner-body&quot; align=&quot;center&quot; width=&quot;570&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;&quot;>
<!-- Body content --><tr>
<td class=&quot;content-cell&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;&quot;>
                                        <table class=&quot;panel&quot; width=&quot;100%&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 0 21px;&quot;><tr>
<td class=&quot;panel-content&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #EDEFF2; padding: 16px;&quot;>
            <table width=&quot;100%&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;&quot;><tr>
<td class=&quot;panel-item&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 0;&quot;>
                        <p style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left; margin-bottom: 0; padding-bottom: 0;&quot;>{{$campaign->template->content}}</p>
                    </td>
                </tr></table>
</td>
    </tr></table>
</td>
                                </tr>
</table>
</td>
                    </tr>
<tr>
<td style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;&quot;>
        <table class=&quot;footer&quot; align=&quot;center&quot; width=&quot;570&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 auto; padding: 0; text-align: center; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;&quot;><tr>
<td class=&quot;content-cell&quot; align=&quot;center&quot; style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;&quot;>
                    <p style=&quot;font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; line-height: 1.5em; margin-top: 0; color: #AEAEAE; font-size: 12px; text-align: center;&quot;>© 2017 QuickMail. All rights reserved.</p>
                </td>
            </tr></table>
</td>
</tr>
</table>
</td>
        </tr></table>
</body>
</html>">
                        Your browser doesn't support iFrames
                    </iframe>
                </td>
            </tr>
        </table>
        {{Form::open(['class' => 'confirm-send inline-form-buttons', 'route' => ['send.store', $campaign],'method' => 'POST'])}}
        <button type="submit" class="btn btn-success">SEND THIS CAMPAIGN</button>
</div>
@endsection