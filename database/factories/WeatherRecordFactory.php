<?php

namespace Database\Factories;

use App\Models\WeatherRecord;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeatherRecordFactory extends Factory
{
    protected $model = WeatherRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $temp = $this->faker->randomFloat(1, 0, 36);
        $humidity = $this->faker->randomFloat(1, 60, 70);
        return [
            'weather' => $this->faker->numberBetween(1, 4),
            'temp' => $temp,
            'humidity' => $humidity,
            'room_temp' => $temp + 10,
            'room_humidity' => $humidity - 5
        ];
    }
}
