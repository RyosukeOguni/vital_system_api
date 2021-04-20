<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeatherRecord;
use App\Http\Resources\WeatherRecordCollection;
use App\Http\Resources\WeatherRecord as WeatherRecordResource;

class WeatherRecordController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    if ($request->query('day')) {
      $weather = WeatherRecord::where('day', $request->day)->firstorFail();
      return new WeatherRecordResource($weather);
    }
    $weathers = WeatherRecord::all();
    return new WeatherRecordCollection($weathers);
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
    return new WeatherRecordResource($weather);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $weather = WeatherRecord::findorFail($id);
    $weather->update($request->all());
    return new WeatherRecordResource($weather);
  }
}
