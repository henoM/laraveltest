<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'path','user_id','address'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Peoples()
    {
        return $this->belongsToMany('App\Models\User\People','home_people');
    }
}
