@extends('layouts.admin')

@section('content')
    <div class="text-end">
        <a href="{{route('admin.types.create')}}" class="btn btn-success">Nuova Tipologia</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <th scope="row">{{$type->id}}</th>
                <td> {{$type->name}}</td>
                <td> {{$type->slug}}</td>
                <td>
                    <form class="d-inline-block" action="{{ route('admin.types.destroy', $type) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection