<?php

namespace Core\Bus\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SeatResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'     => $this->id,
            'number' => $this-> number,
            $this->mergeWhen($request->route()->getName() == 'api.v1.bookings.show', [
                'bus' => new BusResource($this->bus)
            ])
        ];
    }
}
