<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    public function store(StoreItemRequest $request)
    {
        $item = new Item();
        $item->fill($request->all());
        $item->save();
        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message"=>"Statistic not found"], 404);
        }
        return response()->json($item);
    }

    public function update(UpdateItemRequest $request, $id)
    {
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message"=>"Item not found"], 404);
        }
        $item->fill($request->all());
        $item->save();
        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message"=>"Item not found"], 404);
        }
        Item::destroy($id);
        return response()->noContent();
    }
}
