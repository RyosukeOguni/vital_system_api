<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;
use App\Http\Resources\User as UserResource;

use function PHPSTORM_META\map;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::all();
    return new UserCollection($users);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = User::create($request->all());
    return new UserResource($user);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::findorFail($id);
    return new UserResource($user);
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
    $user = User::findorFail($id);
    $user->update($request->all());
    return new UserResource($user);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    User::findorFail($id)->delete();
    return response('Deleted successfully.', 200);
  }

  public function selectdelete(Request $request)
  {
    $content = $request->getContent();
    // 合体演算子??で、第一オペランドがnullの場合、空配列[]を返す
    $json = json_decode($content, true) ?? [];
    User::destroy(array_column($json,'id'));
    return response('Deleted successfully.', 200);
  }
}
