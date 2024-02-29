<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CvSkill extends Model
{
    use HasFactory;

    protected $fillable=[
        'skills',
        'current_salary',
        'axpected_salary',
        'user_id',
    ];


    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
