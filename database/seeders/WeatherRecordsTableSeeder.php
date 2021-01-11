<?php

namespace Database\Seeders;

use App\Models\WeatherRecord;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class WeatherRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //前月のCarbonインスタンスを作成
        $last_month = Carbon::now()->startOfMonth()->subMonth(1);
        //前月の月日数を取得
        $last_month_count = $last_month->daysInMonth;
        //月日数分のダミーデータを月始めから終わりまで作成
        for ($i = 0; $i < $last_month_count; $i++) {
            $last_month_day = $last_month->format('Y-m-d');
            WeatherRecord::factory()->create(['day' => $last_month_day]);
            $last_month->addDays(1);
        }
    }
}
