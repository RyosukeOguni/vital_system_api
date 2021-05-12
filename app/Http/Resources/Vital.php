<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Vital extends JsonResource
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
          //User情報
          'user_id' => $this->user_id,
          'user_data' => [
            'name' => $this->user->name,
            'age' => $this->user->age,
            'sex' => $this->user->sex,
            'diagnosis' => $this->user->diagnosis,
          ],
          //Weather情報
          'weather_record_id' => $this->weather_record_id,
          'weather_data' => [
            'day' => $this->weatherRecord->day,
            'weather' => $this->weatherRecord->weather,
            'temp' => $this->weatherRecord->temp,
            'humidity' => $this->weatherRecord->humidity,
            'room_temp' => $this->weatherRecord->room_temp,
            'room_humidity' => $this->weatherRecord->room_humidity,
          ],
          //Vital情報
          'body_temp' => $this->body_temp,
          'pulse' => $this->pulse,
          'breath' => $this->breath,
          'spo2' => $this->spo2,
          'dbp' => $this->dbp,
          'sbp' => $this->sbp,
          'vital_note' => $this->vital_note,
          'condition' => $this->condition,
          'mood' => $this->mood,
          'sleep' => $this->sleep,
          'breakfast' => $this->breakfast,
          'lunch' => $this->lunch,
          'lunch_amount' => $this->lunch_amount,
          'lunch_start' => $this->lunch_start,
          'lunch_end' => $this->lunch_end,
          'snack' => $this->snack,
          'snack_time' => $this->snack_time,
          'water_intake' => $this->water_intake,
          'life_note' => $this->life_note,
          'voiding_vol1' => $this->voiding_vol1,
          'voiding_time1' => $this->voiding_time1,
          'voiding_memo1' => $this->voiding_memo1,
          'voiding_vol2' => $this->voiding_vol2,
          'voiding_time2' => $this->voiding_time2,
          'voiding_memo2' => $this->voiding_memo2,
          'voiding_vol3' => $this->voiding_vol3,
          'voiding_time3' => $this->voiding_time3,
          'voiding_memo3' => $this->voiding_memo3,
          'defecation_vol1' => $this->defecation_vol1,
          'defecation_time1' => $this->defecation_time1,
          'defecation_memo1' => $this->defecation_memo1,
          'defecation_vol2' => $this->defecation_vol2,
          'defecation_time2' => $this->defecation_time2,
          'defecation_memo2' => $this->defecation_memo2,
          'defecation_vol3' => $this->defecation_vol3,
          'defecation_time3' => $this->defecation_time3,
          'defecation_memo3' => $this->defecation_memo3,
          'total_defecation' => $this->total_defecation,
          'excretion_note' => $this->excretion_note,
          'medicine' => $this->medicine,
          'medicine_time' => $this->medicine_time,
          'vomiting' => $this->vomiting,
          'vomiting_time' => $this->vomiting_time,
          'attack1' => $this->attack1,
          'attack_time1' => $this->attack_time1,
          'attack_duration1' => $this->attack_duration1,
          'attack_memo1' => $this->attack_memo1,
          'attack2' => $this->attack2,
          'attack_time2' => $this->attack_time2,
          'attack_duration2' => $this->attack_duration2,
          'attack_memo2' => $this->attack_memo2,
          'attack3' => $this->attack3,
          'attack_time3' => $this->attack_time3,
          'attack_duration3' => $this->attack_duration3,
          'attack_memo3' => $this->attack_memo3,
          'aspiration' => $this->aspiration,
          'aspiration_time' => $this->aspiration_time,
          'aspiration_point' => $this->aspiration_point,
          'aspiration_color' => $this->aspiration_color,
          'aspiration_type' => $this->aspiration_type,
          'aspiration_note' => $this->aspiration_note,
          'injection' => $this->injection,
          'injection_start' => $this->injection_start,
          'injection_end' => $this->injection_end,
          'injection_point' => $this->injection_point,
          'injection_vol' => $this->injection_vol,
          'injection_note' => $this->injection_note,
          'choke' => $this->choke,
          'step' => $this->step,
          'total_vital_note' => $this->total_vital_note,
        ],
      ],
      'links' => [
        'self' => url('/api/vitals/' . $this->id),
      ]
    ];
  }
}
