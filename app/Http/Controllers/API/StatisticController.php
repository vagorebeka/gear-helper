<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $statistics = Statistic::all();
        return response()->json($statistics);
    }

    public function store(StoreStatisticRequest $request)
    {
        $statistic = new Statistic();
        $statistic->fill($request->all());
        $statistic->save();
        return response()->json($statistic, 201);
    }

    public function show($id)
    {
        $statistic = Statistic::find($id);
        if (is_null($statistic)) {
            return response()->json(["message"=>"Statistic not found"], 404);
        }
        return response()->json($statistic);
    }

    public function update(UpdateStatisticRequest $request, $id)
    {
        $statistic = Statistic::find($id);
        if (is_null($statistic)) {
            return response()->json(["message"=>"Statistic not found"], 404);
        }
        $statistic->fill($request->all());
        $statistic->save();
        return response()->json($statistic);
    }

    public function destroy($id)
    {
        $statistic = Statistic::find($id);
        if (is_null($statistic)) {
            return response()->json(["message"=>"Statistic not found"], 404);
        }
        Statistic::destroy($id);
        return response()->noContent();
    }
}
