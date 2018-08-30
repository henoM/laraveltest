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
        'first_name', 'last_name', 'age','gender','user_id'
    ];

    public function Homes()
    {
        return $this->belongsToMany('App\Models\User\Home','home_people');
    }
}
