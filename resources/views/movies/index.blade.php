<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="">
      <title>titti i film</title>
   </head>
   <body>
      <h1>TUTTI I FILM</h1>
      
         @foreach ($movies as $movie)
         <a href="{{route('movies.show', ['movie' => $movie->id ]) }}">
            <div>
               <img src="{{$movie->cover}}" alt="">
            </div>
            <div class="title">
               <h2>{{$movie->title}}</h2>
            </div>
         </a>
         @endforeach
      
   </body>
</html>