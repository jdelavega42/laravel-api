@extends('layouts.admin')
@section('content')
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
        <button class="btn btn-secondary" type="submit">invia</button>

    </form>
    
@endsection