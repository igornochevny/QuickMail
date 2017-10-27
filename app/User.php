<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function templates()
    {
        return $this->hasMany(Template::class);
    }

    public function bunches()
    {
        return $this->hasMany(Bunch::class);
    }

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}
