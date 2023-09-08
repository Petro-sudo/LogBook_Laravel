<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'startDate',
        'endDate',
        'hours',
        'taskDescrition',
        'file',
        'user_id',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}