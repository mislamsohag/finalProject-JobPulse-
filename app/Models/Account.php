<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',        
        'phone',
        'emergency',        
        'whatsup',
        'dateOfBirth',        
        'img'
    ];

    protected $casts = [
        'dateOfBirth' => 'datetime:Y-m-d',
      ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }


}
