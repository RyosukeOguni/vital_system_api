<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medical extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    protected $attributes = [
        'lunch' => false,
        'snack' => false,
        'medicine' => false,
        'vomiting' => false,
        'aspiration' => false,
        'injection' => false,
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function weather()
    {
        return $this->belongsTo('App\Models\Weather');
    }
}
