<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_records', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->date('day')->comment('日付');
            $table->integer('weather')->comment('天候');
            $table->double('temp')->comment('外気温');
            $table->integer('humidity')->comment('外湿度');
            $table->double('room_temp')->comment('内気温');
            $table->integer('room_humidity')->comment('内湿度');
            $table->timestamp('created_at')->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather_records');
    }
}
