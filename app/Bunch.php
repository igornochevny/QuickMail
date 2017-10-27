<?php

namespace App;

use App\Traits\Selectable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bunch extends BaseModel
{
    use SoftDeletes;

    use Selectable;

    protected $fillable = ['name','description'];

    public function subscribers()
    {
        return $this->hasMany(Subscriber::class);
    }

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
