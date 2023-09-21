<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'perselN',
        'emailMentor',
        'role',
        'year'
    ];

    public function users(){
        return $this->hasMany(User::class, 'mentor_id', 'id');
    
    }
}