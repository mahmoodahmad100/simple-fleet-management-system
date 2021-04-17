<?php

namespace Core\Bus\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * get the station 1.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function station1()
    {
        return $this->belongsTo(Station::class, 'station1_id');
    }

    /**
     * get the station 2.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function station2()
    {
        return $this->belongsTo(Station::class, 'station2_id');
    }

    /**
     * get the buses.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buses()
    {
        return $this->hasMany(Bus::class, 'trip_id');
    }
}
