<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCharacterClassRequest;
use App\Http\Requests\UpdateCharacterClassRequest;
use App\Models\CharacterClass;
use Illuminate\Http\Request;

class CharacterClassController extends Controller
{
    public function index()
    {
        $characterClasses = CharacterClass::all();
        return response()->json($characterClasses);
    }

    public function store(StoreCharacterClassRequest $request)
    {
        $characterClass = new CharacterClass();
        $characterClass->fill($request->all());
        $characterClass->save();
        return response()->json($characterClass, 201);
    }

    public function show($id)
    {
        $characterClass = CharacterClass::find($id);
        if (is_null($statistic)) {
            return response()->json(["message"=>"Character class not found"], 404);
        }
        return response()->json($characterClass);
    }

    public function update(UpdateCharacterClassRequest $request, $id)
    {
        $characterClass = CharacterClass::find($id);
        if (is_null($characterClass)) {
            return response()->json(["message"=>"Character class not found"], 404);
        }
        $characterClass->fill($request->all());
        $characterClass->save();
        return response()->json($characterClass);
    }

    public function destroy($id)
    {
        $characterClass = CharacterClass::find($id);
        if (is_null($characterClass)) {
            return response()->json(["message"=>"Character class not found"], 404);
        }
        CharacterClass::destroy($id);
        return response()->noContent();
    }
}
