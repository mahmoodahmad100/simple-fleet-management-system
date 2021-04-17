<?php

namespace Core\Bus\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BookingResource extends Resource
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
            'id' => $this->id,
            $this->mergeWhen($request->route()->getName() == 'api.v1.bookings.show', [
                'trip' => new TripResource($this->trip)
            ])
        ];
    }
}
