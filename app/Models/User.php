<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Report;
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
        'year',
        'internNumber',
        'mentorNumber',
        'internID',
        'mentorid'
      
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   public function reports(){
    return $this->hasMany(Report::class, 'user_id', 'id');
     return $this->hasMany(Report::class, 'user_id','mentorid');
}

// public function mentor(){
//     return $this->hasMany(User::class, 'mentorid', 'id');

// }
public function mentors()
    {
        return $this->belongsTo(Mentor::class);
    }
}