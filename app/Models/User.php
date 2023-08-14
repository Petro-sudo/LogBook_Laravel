<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'perselNo',
        'email',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function setRoleAttribute($value)
    // {
    //     $this->attributes['role'] = json_encode($value);
    // }

    /**
     * Get the categories
     *
     */
    // public function getRoleAttribute($value)
    // {
    //     return $this->attributes['role'] = json_decode($value);
    // }
    //delete if not working
}