<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\CharacterClass;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = item::all();
        $c = Characterclass::all();

        return view("item.item",['item'=>$item,'c'=>$c]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("item.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $item = new item();
        $item->fill($request->all());
        $item->save();
        return redirect()->route("item.show", $item->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view("item.show",["item" => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view("item.edit", ["item" => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->fill($request->all());
        $item->save();
        return redirect()->route("item.show", $item->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route("item.index");
    }

    public function osszehasonlit(Item $item)
    {
        return view("item.osszehasonlit", ["item" => $item]);
    }
}
