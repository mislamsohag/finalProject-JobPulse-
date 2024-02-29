<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CvBasic extends Model
{
    use HasFactory;
    protected $fillable=[
        'father_name',
        'mother_name',
        'n_id',
        'blood_group',
        'passport',
        'linkedin',
        'facebook',
        'github',
        'behance',
        'portfolio',
        'user_id',
        'account_id',
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
    public function account(): BelongsTo
    {
        return $this->BelongsTo(Account::class);
    }
}

