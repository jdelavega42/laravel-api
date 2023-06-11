@extends('layouts.admin')
@section('content')

<h2>Crea progetto</h2>

    @include('layouts.partials.errors')

    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="type">Tipologia</label>
            <select class="form-select" name="type_id" id="type" >
                <option value=""></option>
                @foreach ($types as $type)
                <option @selected(old('type_id') == $type->id) value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            @foreach ($technologies as $technology)
                
            <div class="form-check">
                <input @checked(in_array($technology->id, old('technologies',[]))) class="form-check-input" type="checkbox" name="technologies[]" value="{{$technology->id}}" id="tag-{{$technology->id}}">
                <label class="form-check-label" for="tag-{{$technology->id}}">
                    {{$technology->name}}
                </label>
            </div>
            @endforeach
        </div>
        <a href="{{url()->previous()}}" class="btn btn-warning">Indietro</a>

        <button class="btn btn-secondary" type="submit">invia</button>

    </form>
    
@endsection