<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'data' => [
                'type' => $this->getTable(),
                'id' => $this->id,
                'attribute' => [
                    'name' => $this->name,
                    'age' => $this->age,
                    'sex' => $this->sex,
                    'diagnosis' => $this->diagnosis,
                    'note' => $this->note
                ],
            ],
            'links' => [
                'self' => url('/api/users/' . $this->id),
            ]
        ];
    }
}
