<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
    ];



    public function post(){

    return $this->hasOne('App\Models\Post'/*'the_changed_user_id'*/);

    }


    public function posts(){
        return $this->HasMany('\App\Models\Post');
    }


    public function roles(){

        return $this->belongsToMany('App\Models\Role')->withPivot('created_at');

        // return $this->belongsToMany('App\Models\Role'/* the_changed_table_name_parameters , 'user_role', 'user_id', 'role_id' */);
    }


    public function photos(){
        return $this->morphMany('App\Models\Photo', 'imageable');
    }

}
