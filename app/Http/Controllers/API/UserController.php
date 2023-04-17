<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 201);
    }

    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message"=>"Statistic not found"], 404);
        }
        return response()->json($user);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message"=>"User not found"], 404);
        }
        $user->fill($request->all());
        $user->save();
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(["message"=>"User not found"], 404);
        }
        User::destroy($id);
        return response()->noContent();
    }
}
