<?php

namespace App\Models;

use App\Scope\UserScope;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $guarded = [];
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


    protected static function booted()
    {
        // static::addGlobalScope(new UserScope);
        // static::addGlobalScope('popular', function (Builder $builder) {
        //     $builder->where('vote', '>', 60);
        // });
        // static::created(function ($user) {
        //     info('Data has been Created!!');
        //     info($user);
        // });
    }


    public function scopeIsPopular($query)
    {
        return $query->where('vote', '>', 60);
    }
}
