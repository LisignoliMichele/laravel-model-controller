@extends('layouts.main')

@section('pageTitle')
    {{$movie->title}}
@endsection

@section('content')

<div class="container">
   <a href="{{route('movies.index')}}"><button type="button" class="btn btn-info">torna alla home</button></a>
   <h3>{{$movie->title . ' ' . $movie->year}}</h3>
   <p>{{$movie->plot}}</p>
</div>
@endsection