<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeatherRecord extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    // 主キーの設定
    public function medical()
    {
        return $this->hasMany('App\Models\Medical');
    }
}
