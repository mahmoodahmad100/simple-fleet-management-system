<?php

namespace Core\Bus\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * get the trips 1.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trips1()
    {
        return $this->hasMany(Trip::class, 'station1_id');
    }

    /**
     * get the trips 2.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trips2()
    {
        return $this->hasMany(Trip::class, 'station2_id');
    }
}
