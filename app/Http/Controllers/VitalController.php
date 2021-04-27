<?php

namespace App\Http\Controllers;

use App\Models\Vital;
use Illuminate\Http\Request;
use App\Http\Resources\Vital as VitalResource;
use App\Http\Resources\VitalCollection;
use App\Http\Resources\VitalIndexCollection;

class VitalController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	//詳細表示用
	public function index(Request $request)
	{
		//クエリパラメーターが存在するなら、リレーション先の天候記録月に該当した診断記録を取得する
		if ($request->query()) {
			$day = $request->month;
			$vitals = Vital::where('user_id', $request->user_id)
				->whereHas('weatherRecord', function ($query) use ($day) {
					$query->where('day', 'like', "$day%");
				})
				->with(['user', 'weatherRecord'])
				->get();
		} else {
			$vitals = Vital::with(['user', 'weatherRecord'])->get();
		}
		return new VitalCollection($vitals);
	}

	//一覧画面用
	public function simpleIndex(Request $request)
	{
		//クエリパラメーターが存在するなら、リレーション先の天候記録月に該当した診断記録を取得する
		if ($request->query()) {
			$day = $request->month;
			$vitals = Vital::where('user_id', $request->user_id)
				->whereHas('weatherRecord', function ($query) use ($day) {
					$query->where('day', 'like', "$day%");
				})
				->with(['user', 'weatherRecord'])
				->get();
		} else {
			$vitals = Vital::with(['user', 'weatherRecord'])->get();
		}
		return new VitalIndexCollection($vitals);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$vital = Vital::create($request->all());
		return new VitalResource($vital);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$vital = Vital::findorFail($id);
		return new VitalResource($vital);
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
		$vital = Vital::findorFail($id);
		$vital->update($request->all());
		return new VitalResource($vital);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Vital::findorFail($id)->delete();
		return response('Deleted successfully.', 200);
	}
}
