<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

//    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'path','user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Peoples()
    {
        return $this->belongsToMany('App\Models\User\People','home_people');
    }
}
