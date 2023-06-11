@extends('layouts.admin')
@section('content')

<h2>Crea Tipologia</h2>

    @include('layouts.partials.errors')

    <form action="{{route('admin.types.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title">
        </div>

        <a href="{{url()->previous()}}" class="btn btn-warning">Indietro</a>
        <button class="btn btn-secondary" type="submit">invia</button>

    </form>
    
@endsection