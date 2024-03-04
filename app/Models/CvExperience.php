<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CvExperience extends Model
{
    use HasFactory;

    protected $fillable=[
        'company_name',
        'designation',
        'joining_date',
        'departure_date',
        'user_id'
    ];

    protected $casts = [
        'joining_date' => 'datetime:Y-m-d',
        'departure_date' => 'datetime:Y-m-d',
      ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    
}
