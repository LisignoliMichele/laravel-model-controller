    {{-- importo la struttura --}}
    @extends('movies.layouts.main')
  
    {{-- fontawesome cdn --}}
    @section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    @endsection
    {{-- titolo pagina --}}
    @section('pageTitle')
    {{$movie->title}}
    @endsection


    {{-- imposto il contenuto della pagina --}}
    @section('content')
    
    <div class="show-movie">
      <a class="backhome" href="{{route('movies.index')}}"><i class="fas fa-home"></i></a>
      <div class="movieInfo">
        <div class="movieposter">
          <img src="{{$movie->cover}}" alt="movie cover">
        </div>
        <div class="info">
          <h1>{{$movie->title}}</h1>
          <h3>{{$movie->year}}</h3>
          <h2>{{$movie->film_director}}</h2>
        </div>
      </div>
      <div class="plot">
        <p>{{$movie->plot}}</p>
      </div>
    </div>

    @endsection
      
    
 


