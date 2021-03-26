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
          'id' => $this->id,
          'name' => $this->name,
          'age' => $this->age,
          'sex' => $this->sex,
          'diagnosis' => $this->diagnosis,
          'note' => $this->note,
          'created_at' => $this->created_at->format('Y年m月d日')
        ],
      ],
      'links' => [
        'self' => url('/api/users/' . $this->id),
      ]
    ];
  }
}
