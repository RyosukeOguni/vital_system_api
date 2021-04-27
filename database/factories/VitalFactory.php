<?php

namespace Database\Factories;

use App\Models\Vital;
use Illuminate\Database\Eloquent\Factories\Factory;

class VitalFactory extends Factory
{
  protected $model = Vital::class;

  public function definition(): array
  {
    //各時間を取得（10分区切り）
    $start_time = $this->time10Cile($this->faker->dateTimeBetween('10:00', '14:00'));
    //項目を準備
    // $attacks = ['強直発作', '間代発作', 'ミオクロニー発作', '非定型欠神発作', '強直間代発作'];
    // $points = ['鼻', '胃', '腸'];            'aspiration_point' => $this->faker->randomElement($points),
    // 'aspiration_point' => $this->faker->randomElement($points),
    // $aspiration_colors = ['透明', '白', '黄', '緑', '赤褐色'];
    // $aspiration_types = ['しょう液性', '粘ちょう性', '膿性', '血性'];

    return [
      'body_temp' => $this->faker->randomFloat(1, 34, 40),
      'pulse' => $this->faker->numberBetween(60, 100),
      'breath' => $this->faker->numberBetween(1, 3),
      'spo2' => $this->faker->numberBetween(80, 100),
      'dbp' => $this->faker->numberBetween(100, 140),
      'sbp' => $this->faker->numberBetween(70, 100),
      'vital_note' => $this->faker->realText,
      'condition' => $this->faker->numberBetween(1, 3),
      'mood' => $this->faker->numberBetween(1, 3),
      'sleep' => $this->faker->numberBetween(1, 3),
      'breakfast' => $this->faker->numberBetween(1, 3),
      'lunch' => $this->faker->boolean(50),
      'lunch_amount' => $this->faker->numberBetween(1, 4),
      'lunch_start' => $start_time->format('H:i'),
      'lunch_end' => $start_time->modify('+30 minutes')->format('H:i'),
      'snack' => $this->faker->boolean(50),
      'snack_time' => $this->time10Cile($this->faker->dateTimeBetween('14:00', '16:00'))->format('H:i'),
      'water_intake' => $this->faker->numberBetween(1, 7),
      'life_note' => $this->faker->realText,
      'voiding_vol1' => $this->faker->numberBetween(1, 5),
      'voiding_time1' => $this->time10Cile($this->faker->dateTimeBetween('00:00', '08:00'))->format('H:i'),
      'voiding_memo1' => $this->faker->realText(15, 5),
      'voiding_vol2' => $this->faker->numberBetween(1, 5),
      'voiding_time2' => $this->time10Cile($this->faker->dateTimeBetween('08:00', '16:00'))->format('H:i'),
      'voiding_memo2' => $this->faker->realText(15, 5),
      'voiding_vol3' => $this->faker->numberBetween(1, 5),
      'voiding_time3' => $this->time10Cile($this->faker->dateTimeBetween('16:00', '24:00'))->format('H:i'),
      'voiding_memo3' => $this->faker->realText(15, 5),
      'defecation_vol1' => $this->faker->numberBetween(1, 5),
      'defecation_time1' => $this->time10Cile($this->faker->dateTimeBetween('00:00', '08:00'))->format('H:i'),
      'defecation_memo1' => $this->faker->realText(15, 5),
      'defecation_vol2' => $this->faker->numberBetween(1, 5),
      'defecation_time2' => $this->time10Cile($this->faker->dateTimeBetween('08:00', '16:00'))->format('H:i'),
      'defecation_memo2' => $this->faker->realText(15, 5),
      'defecation_vol3' => $this->faker->numberBetween(1, 5),
      'defecation_time3' => $this->time10Cile($this->faker->dateTimeBetween('16:00', '24:00'))->format('H:i'),
      'defecation_memo3' => $this->faker->realText(15, 5),
      'total_defecation' => $this->faker->numberBetween(50, 300),
      'excretion_note' => $this->faker->realText,
      'medicine' => $this->faker->boolean(50),
      'medicine_time' => $this->time10Cile($this->faker->dateTimeBetween('10:00', '14:00'))->format('H:i'),
      'vomiting' => $this->faker->boolean(50),
      'vomiting_time' => $this->time10Cile($this->faker->dateTimeBetween('00:00', '24:00'))->format('H:i'),
      'attack1' => $this->faker->numberBetween(1, 5),
      'attack_time1' => $this->time10Cile($this->faker->dateTimeBetween('00:00', '08:00'))->format('H:i'),
      'attack_duration1' => $this->faker->numberBetween(1, 6),
      'attack_memo1' => $this->faker->realText(15, 5),
      'attack2' => $this->faker->numberBetween(1, 5),
      'attack_time2' => $this->time10Cile($this->faker->dateTimeBetween('08:00', '16:00'))->format('H:i'),
      'attack_duration2' => $this->faker->numberBetween(1, 6),
      'attack_memo2' => $this->faker->realText(15, 5),
      'attack3' => $this->faker->numberBetween(1, 5),
      'attack_time3' => $this->time10Cile($this->faker->dateTimeBetween('16:00', '24:00'))->format('H:i'),
      'attack_duration3' => $this->faker->numberBetween(1, 6),
      'attack_memo3' => $this->faker->realText(15, 5),
      'aspiration' => $this->faker->boolean(50),
      'aspiration_time' => $this->time10Cile($this->faker->dateTimeBetween('00:00', '24:00'))->format('H:i'),
      'aspiration_point' => $this->faker->numberBetween(1, 3),
      'aspiration_color' => $this->faker->numberBetween(1, 5),
      'aspiration_type' => $this->faker->numberBetween(1, 4),
      'aspiration_note' => $this->faker->realText,
      'injection' => $this->faker->boolean(50),
      'injection_start' => $start_time->format('H:i'),
      'injection_end' => $start_time->modify('+30 minutes')->format('H:i'),
      'injection_point' => $this->faker->numberBetween(1, 3),
      'injection_vol' => $this->faker->numberBetween(1, 7),
      'injection_note' => $this->faker->realText,
      'choke' => $this->faker->numberBetween(1, 7),
      'step' => $this->faker->numberBetween(1, 8),
      'total_vital_note' => $this->faker->realText,
    ];
  }

  public function time10Cile($time)
  {
    $_hour = $time->format('H');
    $_minute = $time->format('i');
    if ($_minute % 10) {
      $_minute += 10 - ($_minute % 10);
    }
    return $time->setTime($_hour, $_minute, 0);
  }
}
