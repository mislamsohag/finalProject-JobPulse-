<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'response',
        'benefits',
        'education',
        'work_mode',
        'job_type',
        'age_range',
        'qualification',
        'experience',
        'vacancy',
        'job_location',
        'salary',
        'deadline',
        'category_id',
        'company_id',
        'user_id'
    ];

    protected $casts = [
        'deadline' => 'datetime:Y-m-d',
      ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
