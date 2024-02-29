<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CvEducation extends Model
{
    use HasFactory;
    protected $fillable=[
        'degree',
        'school_university',
        'department',
        'group',
        'passing_year',
        'CGPA',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
