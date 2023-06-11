
 

@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $project->title }}</h1>
    <div class="text-end">
        {{ $project->slug }}
    </div>
    <p class="mt-4">{{ $project->description }}</p>
    <p class="mt-4">Tipologia: {{ $project->type?->name }}</p>
    <p class="mt-4">Tecnologie:
        @forelse ($project->technologies as $technology)
        {{$technology->name}} {{$loop-> last ? '':','}}
    @empty
        null
    @endforelse
    </p>
    <a href="{{url()->previous()}}" class="btn btn-warning">Indietro</a>
@endsection