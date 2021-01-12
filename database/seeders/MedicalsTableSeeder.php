<?php

namespace Database\Seeders;

use App\Models\Medical;
use App\Models\User;
use App\Models\WeatherRecord;
use Illuminate\Database\Seeder;

class MedicalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //前月のCarbonインスタンスを作成
        $users = new User;
        $weather_records = new WeatherRecord;
        //月日数分のダミーデータを月始めから終わりまで作成
        for ($i = 1; $i <= $weather_records->count(); $i++) {
            for ($j = 1; $j <= $users->count(); $j++) {
                Medical::factory()->create(['user_id' => $j, 'weather_record_id' => $i]);
            }
        }
    }
}
