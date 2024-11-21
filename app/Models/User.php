<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use app\Models\Biodata;

class User extends Authenticatable
{
use HasFactory, Notifiable, HasRoles;

protected $guard_name = 'web';
/**
* The attributes that are mass assignable.
*
* @var array<int, string>
*/
protected $fillable = [
    'name',
    'email',
    'password',
    'nip',
    'nisn'
    ];
/**
* The attributes that should be hidden for serialization.
*
* @var array<int, string>
*/
protected $hidden = [
    'password',
    'remember_token',
    ];
    /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
    ];

// app/Models/User.php
public function biodata()
{
    return $this->hasOne(Biodata::class);
}

public function pengajuanBiodata()
{
    return $this->hasMany(PengajuanBiodata::class);
}
}