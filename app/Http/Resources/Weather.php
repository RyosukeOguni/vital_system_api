<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Weather extends JsonResource
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
            'date' => [
                'type' => $this->getTable(),
                'id' => $this->id,
                'attribute' => [
                    'day' => $this->day,
                    'weather' => $this->weather,
                    'temp' => $this->temp,
                    'humidity' => $this->humidity,
                    'room_temp' => $this->room_temp,
                    'room_humidity' => $this->room_humidity,
                ]
            ],
            'links' => [
                'self' => url('/api/weathers/' . $this->id),
            ]
        ];
    }
}
