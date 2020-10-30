<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'telephone', 'joined_on', 'role_id', 'comments', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that define the roles. 
     *
     * @var array
     */
    public $roles = [
        [ 'role_id' => 1, 'role' => 'Sales Manager' ],
        [ 'role_id' => 2, 'role' => 'Sales Representative' ],
    ];

    /**
     * The attributes that should be valid for create.
     *
     * @var array
     */
    public static $rules = [
        'name'             => 'required',
        'email'            => 'required',
        'telephone'        => 'required',
        'role_id'          => 'required',
        'joined_on'        => '',
        'comments'         => '',
        'status'           => '',
    ];
}
