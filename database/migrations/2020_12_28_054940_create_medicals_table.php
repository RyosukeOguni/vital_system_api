<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->integer('user_id')->comment('利用者ID');
            $table->integer('weather_id')->comment('天候記録ID');
            $table->double('body_temp')->nullable()->comment('体温');
            $table->integer('pulse')->nullable()->comment('脈拍');
            $table->integer('breath')->nullable()->comment('呼吸頻度');
            $table->integer('spo2')->nullable()->comment('SPO2');
            $table->integer('dbp')->nullable()->comment('血圧拡張');
            $table->integer('sbp')->nullable()->comment('血圧収縮');
            $table->text('vital_note')->nullable()->comment('バイタル備考');
            $table->integer('condition')->nullable()->comment('体調');
            $table->integer('mood')->nullable()->comment('機嫌');
            $table->integer('sleep')->nullable()->comment('睡眠');
            $table->integer('breakfast')->nullable()->comment('朝食');
            $table->boolean('lunch')->comment('昼食');
            $table->integer('lunch_amount')->nullable()->comment('昼食量');
            $table->time('lunch_start')->nullable()->comment('昼食開始時間');
            $table->time('lunch_end')->nullable()->comment('昼食終了時間');
            $table->boolean('snack')->comment('おやつ');
            $table->time('snack_time')->nullable()->comment('おやつ時間');
            $table->integer('water_intake')->nullable()->comment('摂取水分量');
            $table->text('life_note')->nullable()->comment('生活記録備考');
            $table->integer('voiding_vol1')->nullable()->comment('排尿量１');
            $table->time('voiding_time1')->nullable()->comment('排尿時間１');
            $table->string('voiding_memo1')->nullable()->comment('排尿その他１');
            $table->integer('voiding_vol2')->nullable()->comment('排尿量２');
            $table->time('voiding_time2')->nullable()->comment('排尿時間２');
            $table->string('voiding_memo2')->nullable()->comment('排尿その他２');
            $table->integer('voiding_vol3')->nullable()->comment('排尿量３');
            $table->time('voiding_time3')->nullable()->comment('排尿時間３');
            $table->string('voiding_memo3')->nullable()->comment('排尿その他３');
            $table->integer('defecation_vol1')->nullable()->comment('排便量１');
            $table->time('defecation_time1')->nullable()->comment('排便時間１');
            $table->string('defecation_memo1')->nullable()->comment('排便その他１');
            $table->integer('defecation_vol2')->nullable()->comment('排便量２');
            $table->time('defecation_time2')->nullable()->comment('排便時間２');
            $table->string('defecation_memo2')->nullable()->comment('排便その他２');
            $table->integer('defecation_vol3')->nullable()->comment('排便量３');
            $table->time('defecation_time3')->nullable()->comment('排便時間３');
            $table->string('defecation_memo3')->nullable()->comment('排便その他３');
            $table->integer('total_defecation')->nullable()->comment('排便量合計');
            $table->text('excretion_note')->nullable()->comment('排泄記録備考');
            $table->boolean('medicine')->comment('服薬');
            $table->time('medicine_time')->nullable()->comment('服薬時間');
            $table->boolean('vomiting')->comment('嘔吐');
            $table->time('vomiting_time')->nullable()->comment('嘔吐時間');
            $table->string('attack1')->nullable()->comment('発作１');
            $table->time('attack_time1')->nullable()->comment('発作時間１');
            $table->integer('attack_duration1')->nullable()->comment('発作継続時間１');
            $table->string('attack_memo1')->nullable()->comment('発作その他１');
            $table->string('attack2')->nullable()->comment('発作２');
            $table->time('attack_time2')->nullable()->comment('発作時間２');
            $table->integer('attack_duration2')->nullable()->comment('発作継続時間２');
            $table->string('attack_memo2')->nullable()->comment('発作その他２');
            $table->string('attack3')->nullable()->comment('発作３');
            $table->time('attack_time3')->nullable()->comment('発作時間３');
            $table->integer('attack_duration3')->nullable()->comment('発作継続時間３');
            $table->string('attack_memo3')->nullable()->comment('発作その他３');
            $table->boolean('aspiration')->comment('吸引');
            $table->time('aspiration_time')->nullable()->comment('吸引時間');
            $table->string('aspiration_point')->nullable()->comment('吸引場所');
            $table->string('aspiration_color')->nullable()->comment('吸引物色');
            $table->string('aspiration_type')->nullable()->comment('吸引質');
            $table->text('aspiration_note')->nullable()->comment('吸引備考');
            $table->boolean('injection')->comment('注入');
            $table->time('injection_start')->nullable()->comment('注入開始時間');
            $table->time('injection_end')->nullable()->comment('注入終了時間');
            $table->string('injection_point')->nullable()->comment('注入場所');
            $table->integer('injection_vol')->nullable()->comment('注入量');
            $table->text('injection_note')->nullable()->comment('注入備考');
            $table->integer('choke')->nullable()->comment('むせ');
            $table->integer('step')->nullable()->comment('歩数');
            $table->text('medical_note')->nullable()->comment('診断記録備考');
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
        Schema::dropIfExists('medicals');
    }
}
