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
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->title}}</td>
                <td>{{$movie->movie_director}}</td>
                <td>{{$movie->genres}}</td>
                <td>{{$movie->year}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection