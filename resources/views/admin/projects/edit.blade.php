@extends('layouts.admin')

@section('content')
    <h2>Modifica il progetto {{ $project->title }}</h2>

    <form method="POST" action="{{ route('admin.projects.update', $project->slug) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">descrizione</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $project->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="type">Tipologia</label>
            <select class="form-select" name="type_id" id="type" >
                <option value=""></option>
                @foreach ($types as $type)
                <option @selected($type->id == old('type_id', $project->type?->id)) value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection