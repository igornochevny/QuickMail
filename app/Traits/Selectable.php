<?php

namespace App\Traits;

use App\Bunch;
use App\Template;
use Illuminate\Support\Facades\Auth;

trait Selectable
{
    public static function getSelectListTemplate($value = 'name', $key = 'id'){
        return Template::latest()->where('created_by', Auth::user()->id)->pluck($value, $key);
    }

    public static function getSelectListBunch($value = 'name', $key = 'id'){
        return Bunch::latest()->where('created_by', Auth::user()->id)->pluck($value, $key);
    }
}