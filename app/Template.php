<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Selectable;

class Template extends BaseModel
{
    use SoftDeletes;

    use Selectable;


    protected $fillable = ['name','content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public static function boot()
    {
        parent::boot();
    }

}
