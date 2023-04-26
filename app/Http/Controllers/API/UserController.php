<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $new_user_data = $request->all();
        $new_user_data["password"] = Hash::make($new_user_data["password"]);
        $user->fill($new_user_data);
        $user->save();
        $token = $user->createToken("ApiToken")->plainTextToken;
        $response = [
            "message" => "Registration successful",
            "token" => $token
        ];
        return response($response, 201);
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->all())) {
            $user = Auth::user();
            $token = $user->createToken("ApiToken")->plainTextToken;
            $response = [
                "message" => "Login successful",
                "token" => $token
            ];
            return response($response);
        } else {
            return response(["message" => "Unauthenticated."], 401);
        }
    }
}
