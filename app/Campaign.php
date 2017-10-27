<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends BaseModel
{
    use SoftDeletes;


    protected $fillable = ['name','template_id','bunch_id','description'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function template(){
        return $this->belongsTo(Template::class);
    }

    public function bunch(){
        return $this->belongsTo(Bunch::class);
    }

    public static function boot()
    {
        parent::boot();
    }
}
