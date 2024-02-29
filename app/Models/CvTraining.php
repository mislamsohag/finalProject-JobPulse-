<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CvTraining extends Model
{
    use HasFactory;

    protected $fillable=[
        'training_name',
        'organization',
        'duration',
        'passing_year',
        'user_id'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

}
