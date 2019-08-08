<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *

     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    protected $fillable = [
        'email',
        'username',
        'password',
        'last_name',
        'first_name',
        'permissions',
        'name',
        'gender',
        'reviews',
        'photo',
        'points'
    ];

    protected $appends = ['image'];

    protected $loginNames = ['username'];

    public function getImageAttribute()
	{
        if($this->roles()->first()->slug == 'admin' || $this->roles()->first()->slug == 'superAdmin'){
            if($this->gender == 'M')
                $image = 'material/images/users/p3.png';
            else
                $image = 'material/images/users/p4.png';
        }
        else if($this->roles()->first()->slug == 'mahasiswa' ){
            if($this->gender == 'M')
                $image = 'material/images/users/male.png';
            else
                $image = 'material/images/users/female.png';
        }
		return $image;
    }

    public function review(){
        return $this->hasMany(Review::class);
    }

    public function vote(){
        return $this->hasMany(Vote::class);
    }

    public function recommendbook(){
        return $this->hasMany(Recommendbook::class);
    }
}
