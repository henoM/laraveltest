<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected  $table = 'peoples';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'Last_name', 'age','gender'
    ];


}
