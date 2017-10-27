<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use SoftDeletes;

    protected $fillable = ['first_name','last_name','email'];

    public function bunch()
    {
        return $this->belongsTo(Bunch::class);
    }

}
