@extends('layouts.main')

@section('pageTitle')
    INDEX
@endsection

@section('content')
<div class="container">
    <div class="text-right mb-5">
        <a href="{{route('movies.create')}}"><button type="button" class="btn btn-info">Aggiungi Un Film</button></a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>TITOLO</th>
                <th>REGISTA</th>
                <th>GENERI</th>
                <th>ANNO</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->title}}</td>
                <td>{{$movie->movie_director}}</td>
                <td>{{$movie->genres}}</td>
                <td>{{$movie->year}}
                <td class="buttons">
                    <a href="{{route('movies.show', ['movie' => $movie->id ])}}"><button type="button" class="btn btn-info">Visualizza</button></a>
                    <a href="{{route('movies.edit', ['movie' => $movie->id ])}}"><button type="button" class="btn btn-info">Modifica</button></a>
                    <form action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection