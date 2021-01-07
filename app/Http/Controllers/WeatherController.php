<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Weather as WeatherResource;
use App\Http\Resources\WeatherCollection;
use App\Models\WeatherRecord;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('day')){
            $weather = WeatherRecord::where('day',$request->day)->firstorFail();
            return new WeatherResource($weather);
        }
        $weathers = WeatherRecord::all();
        return new WeatherCollection($weathers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $weather = WeatherRecord::create($request->all());
        return new WeatherResource($weather);
    }
}
