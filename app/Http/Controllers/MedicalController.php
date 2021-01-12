<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use Illuminate\Http\Request;
use App\Http\Resources\Medical as MedicalResource;
use App\Http\Resources\MedicalCollection;
use App\Http\Resources\MedicalIndexCollection;

class MedicalController extends Controller
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
            $day = $request->year . '-' . $request->month;
            $medicals = Medical::where('user_id', $request->user_id)
                ->whereHas('weatherRecord', function ($query) use ($day) {
                    $query->where('day', 'like', "$day%");
                })
                ->with(['user', 'weatherRecord'])
                ->get();
        } else {
            $medicals = Medical::with(['user', 'weatherRecord'])->get();
        }
        return new MedicalCollection($medicals);
    }

    //一覧画面用
    public function simpleIndex(Request $request)
    {
        //クエリパラメーターが存在するなら、リレーション先の天候記録月に該当した診断記録を取得する
        if ($request->query()) {
            $day = $request->year . '-' . $request->month;
            $medicals = Medical::where('user_id', $request->user_id)
                ->whereHas('weatherRecord', function ($query) use ($day) {
                    $query->where('day', 'like', "$day%");
                })
                ->with(['user', 'weatherRecord'])
                ->get();
        } else {
            $medicals = Medical::with(['user', 'weatherRecord'])->get();
        }
        return new MedicalIndexCollection($medicals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medical = Medical::create($request->all());
        return new MedicalResource($medical);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medical = Medical::findorFail($id);
        return new MedicalResource($medical);
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
        $medical = Medical::findorFail($id);
        $medical->update($request->all());
        return new MedicalResource($medical);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medical::findorFail($id)->delete();
        return response('Deleted successfully.', 200);
    }
}
