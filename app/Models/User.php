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
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'isBanned', 
        'occupation',
        'race',
        'marital',
        'gender',
        'birthdate',
        'street_1',
        'postcode',
        'city',
        'state',
        'Email_Verified_At',
        'ban',
        'reason',
        'profilepicture',
        'created_at',
        'updated_at'
    ];

    public static $laracombee = ['name' => 'string'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // protected $primaryKey = 'user_id';
    // public function userReview()
    // {
    //     return $this->hasMany(review::class);
    // }
}
