<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'account_id',
        'company_id',
        'current_salary',
        'expected_salary'
    ];
}
