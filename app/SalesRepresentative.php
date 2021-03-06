<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesRepresentative extends Model
{
    /**
     * The attributes that define table name.
     *
     * @var array
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'telephone', 'joined_on', 'role_id', 'salse_route_id', 'status'
    ];

    /**
     * The attributes that define the roles. 
     *
     * @var array
     */
    // public $role = [ 'role_id' => 2, 'role' => 'Sales Representative' ];

    /**
     * The attributes that should be valid for create.
     *
     * @var array
     */
    public static $rules = [
        'name'             => 'required',
        'email'            => 'required|email|unique:users,email',
        'telephone'        => 'required|numeric|digits:10',
        // 'role_id'          => '',
        'salse_route_id'   => 'required',
        'joined_on'        => '',
        'status'           => '',
    ];

}
