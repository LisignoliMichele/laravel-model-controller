<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <img src="{{$movie->cover}}" alt="movie cover">
   <h1>{{$movie->title}}</h1>
   <h3>{{$movie->year}}</h3>
   <h2>{{$movie->film_director}}</h2>
   <p>{{$movie->plot}}</p>

</body>
</html>l