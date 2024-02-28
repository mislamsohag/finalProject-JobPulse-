<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [        
        'name',
        'email',        
        'password',
        'otp',
        'rule_id'
    ];
    protected $attributes=[
        'otp'=>'0',
        'rule_id'=>3
];

public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    /* public function tasks(){
        return $this->hasMany(Task::class);
    } */


  
   /*  protected $hidden = [
        'password',
        'remember_token',
    ]; */

   
    /* protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ]; */
}
