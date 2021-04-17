<?php

namespace Core\Bus\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * get the bus.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id');
    }

    /**
     * get all the available seats
     * 
     * @param int $station1_id
     * @param int $station2_id
     * @return $this
     */
    public function all_available($station1_id, $station2_id)
    {
        # recursion method ...
    }
}
