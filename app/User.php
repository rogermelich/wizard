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

    /**
     * Get the enrollment record associated with the user.
     */
    public function enrollment()
    {
        return $this->hasOne('App\Enrollment');
    }

    /**
     * Get the person record associated with the user.
     */
    public function person()
    {
        return $this->hasOne('App\Person');
    }
}
