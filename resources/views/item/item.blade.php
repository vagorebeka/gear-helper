@extends('layouts.app')

@section("content")
    <div class="container">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>stat1</th>
                    <th>stat1amount</th>
                    <th>stat2</th>
                    <th>stat2amount</th>
                    <th>stat3</th>
                    <th>stat3amount</th>
                    <th>slot</th>
                    <th>material</th>
                    <th>operation</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($item as $items)
                    <tr>
                        <th>{{ $items->id }}</th>
                        <th>{{ $items->name }}</th>
                        <th>{{ $items->stat1 }}</th>
                        <th>{{ $items->stat1amount }}</th>
                        <th>{{ $items->stat2 }}</th>
                        <th>{{ $items->stat2amount }}</th>
                        <th>{{ $items->stat3 }}</th>
                        <th>{{ $items->stat3amount }}</th>
                        <th>{{ $items->slot }}</th>
                        <th>{{ $items->material }}</th>
                        <th> <a href="{{ route('item.show', $items->id) }}" class="btn btn-secondary"> Részletek  </a>      </th>

                    </tr>
                @endforeach
                

            </tbody>
        </table>   
        
                <div>
                    <select name="" id="">
                    @foreach ($item as $items)
                            <option value="">{{ $items->name }}</option>
                    @endforeach   
                    </select>
                    <select name="" id="">
                    @foreach ($item as $items)
                            <option value="">{{ $items->name }}</option>
                    @endforeach   
                    </select>
                </div>
                <div>
                    <select name="" id="">
                    @foreach ($c as $cs)
                            <option value="">{{ $cs->name }}</option>
                    @endforeach   
                    </select>
                    <select name="" id="">
                    @foreach ($c as $cs)
                            <option value="">{{ $cs->name }}</option>
                    @endforeach   
                    </select>
                </div>


        
    </div>
@endsection