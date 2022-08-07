<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
    ];

    protected  $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_user',
        'alamat_user',
        'notelp_user',
        'password_user',
        'username_user',
    ];

    //relationship
    public function Batch(){
        //just having one batch
        return $this->belongsTo(Role::class, 'FK_id_role', 'id');
    }
}
