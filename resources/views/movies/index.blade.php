      {{-- importo la struttura --}}
      @extends('movies.layouts.main')

      {{-- imposto il titolo della pagina --}}
      @section('pageTitle')
      HOME-PAGE
      @endsection
      
      {{-- imposto il contenuto della pagina --}}
      @section('content')
      
      <div class="homepage">
         <h1>TUTTI I FILM</h1>
         <div v-dragscroll  class='all-movies'>
            @foreach ($movies as $movie)
            <a class="movie" href="{{route('movies.show', ['movie' => $movie->id ])}}">
               <div class='movie-poster'>
                  <img src="{{$movie->cover}}" alt="">
               </div>
               <div class="movie-title">
                  <h2>{{$movie->title}}</h2>
               </div>
            </a>
            @endforeach
        </div>
      </div>
      @endsection
        
      
   