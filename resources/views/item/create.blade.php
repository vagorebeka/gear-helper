@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Új Item felvétele</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action={{ route('item.store') }} method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"> Item név:</label>
                    <input type="text" id="name" name="name" placeholder="Név" value="{{ old('name') }}"
                        @class([
                            'form-control',
                            'is-invalid' => array_key_exists('name', $errors->messages()),
                        ])>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="stat1" class="form-label">Stat1: </label>
                    <input type="text" id="stat1" name="stat1" placeholder="stat1"
                        value="{{ old('stat1') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('stat1', $errors->messages()),
                        ])>
                    @error('stat1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stat1amount" class="form-label">Stat1Amount: </label>
                    <input type="number" id="stat1amount" name="stat1amount" placeholder="stat1amount"
                        value="{{ old('stat1amount') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('stat1amount', $errors->messages()),
                        ])>
                    @error('stat1amount')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stat2" class="form-label">Stat2: </label>
                    <input type="text" id="stat2" name="stat2" placeholder="stat2"
                        value="{{ old('stat2') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('stat2', $errors->messages()),
                        ])>
                    @error('stat2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stat2amount" class="form-label">Stat2Amount: </label>
                    <input type="number" id="stat2amount" name="stat2amount" placeholder="stat2amount"
                        value="{{ old('stat1amount') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('stat2amount', $errors->messages()),
                        ])>
                    @error('stat2amount')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stat3" class="form-label">Stat3: </label>
                    <input type="text" id="stat3" name="stat3" placeholder="stat3"
                        value="{{ old('stat3') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('stat3', $errors->messages()),
                        ])>
                    @error('stat3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="stat3amount" class="form-label">Stat3Amount: </label>
                    <input type="number" id="stat3amount" name="stat3amount" placeholder="stat3amount"
                        value="{{ old('stat3amount') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('stat2amount', $errors->messages()),
                        ])>
                    @error('stat3amount')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slot" class="form-label">Slot: </label>
                    <input type="text" id="slot" name="slot" placeholder="slot"
                        value="{{ old('slot') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('slot', $errors->messages()),
                        ])>
                    @error('slot')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="material" class="form-label">Material: </label>
                    <input type="number" id="material" name="material" placeholder="material csak 1-3 kozott lehet"
                        value="{{ old('material') }}" @class([
                            'form-control',
                            'is-invalid' => array_key_exists('material', $errors->messages()),
                        ])>
                    @error('material')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <button type="submit" class="btn btn-secondary">Felvétel</button>
            </form>
        </div>
    </div>

</div>


@endsection
