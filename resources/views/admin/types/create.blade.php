@extends('layouts.admin')
@section('content')

<h2>Crea Tipologia</h2>

    <form action="{{route('admin.types.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" name="name">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <a href="{{url()->previous()}}" class="btn btn-warning">Indietro</a>
        <button class="btn btn-secondary" type="submit">invia</button>

    </form>
    
@endsection