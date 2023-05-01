@extends('layouts.app')


@section("content")
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{$item->name}}</h4>
            </div>
            <div class="card-body">
                <h3>{{$item->stat1}} : {{$item->stat1amount}}</h3>
                <h3>{{$item->stat2}} : {{$item->stat2amount}}</h3>
                <h3>{{$item->stat3}} : {{$item->stat3amount}}</h3>
                <h3>Slot: {{$item->slot}}</h3>
                <h3>Material : {{$item->material}}</h3>


            </div>


        </div>


    </div>












@endsection
