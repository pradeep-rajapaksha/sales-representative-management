<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SalesRoute extends Model
{
    /**
     * The attributes that define table name.
     *
     * @var array
     */
    protected $table = 'salse_routes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'comments', 'status'
    ];


    /**
     * The attributes that should be valid for create.
     *
     * @var array
     */
    public static $rules = [
        'name'             => 'required',
        'comments'         => '',
        'status'           => ''
    ];
}