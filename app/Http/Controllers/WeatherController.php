<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Weather as WeatherResource;
use App\Http\Resources\WeatherCollection;
use App\Models\Weather;

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
            $weather = Weather::where('day',$request->day)->first();
            return new WeatherResource($weather);
        }
        $weathers = Weather::all();
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
        $weather = Weather::create($request->all());
        return new WeatherResource($weather);
    }
}
