      {{-- importo la struttura --}}
      @extends('movies.layouts.main')

      {{-- imposto il titolo della pagina --}}
      @section('pageTitle')
      HOME-PAGE
      @endsection
      
      {{-- imposto il contenuto della pagina --}}
      @section('content')
      
      <div class="homepage">
         <div class="container">
            <h1>My Movies Database</h1>
               <div >
                  <a href="{{route('movies.create')}}">aggiungi un film</a>
                  
                  <table class="moviesTable">
                    <tr class='tableTitles'>
                      <th class="movie_title">movie</th>
                      <th>film director</th>
                      <th></th>
                    </tr>
                    @foreach ($movies as $movie)
                    <tr class='movie'>
                      <td><p>{{$movie->title}}</p></td>
                      <td><p>{{$movie->film_director}}</p></td>
                      <td>
                        <div class="actions">
                          <a href="{{route('movies.show', ['movie' => $movie->id ])}}">visualizza</a>
                          <a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-success">Modifica</button></a>
                          <form action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </table>
                  
               </div>
               
           </div>
         </div>
      </div>
      @endsection
        
      
   