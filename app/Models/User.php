<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
public function account(): HasOne
    {
        return $this->hasOne(Account::class);
    }
public function cv_basic(): HasOne
    {
        return $this->hasOne(CvBasic::class);
    }
public function cv_education(): HasOne
    {
        return $this->hasOne(CvEducation::class);
    }
public function cv_experience(): HasOne
    {
        return $this->hasOne(CvExperience::class);
    }
public function cv_training(): HasOne
    {
        return $this->hasOne(CvTraining::class);
    }
public function cv_skill(): HasOne
    {
        return $this->hasOne(CvSkill::class);
    }



}
