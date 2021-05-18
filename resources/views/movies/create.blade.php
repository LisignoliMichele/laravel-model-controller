   {{-- importo la struttura --}}
   @extends('movies.layouts.main')

   {{-- imposto il titolo della pagina --}}
   @section('pageTitle')
   create movie
   @endsection
   
   {{-- imposto il contenuto della pagina --}}
   @section('content')

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="{{route('movies.store')}}" method="POST">
		@method('POST')
		@csrf
		<div class="form-group">
			<label for="cover_image">Immagine Cover</label>
			<input type="text" id="cover_image" name="cover" placeholder="URL Immagine" value="{{ old('cover_image') }}">
		</div>
		<div class="form-group">
			<label for="title">Titolo</label>
			<input type="text" id="title" name="title" placeholder="Titolo" value="{{ old('title') }}">
		</div>
		<div class="form-group">
			<label for="film_director">Regista</label>
			<input type="text" id="film_director" name="film_director" placeholder="Regista" value="{{ old('film_director') }}">
		</div>
		<div class="form-group">
			<label for="genres">Generi</label>
			<input type="text" id="genres" name="genres" placeholder="Generi" value="{{ old('genres') }}">
		</div>
		<div class="form-group">
			<label for="plot">Trama</label>
			<textarea id="plot" name="plot" rows="8" placeholder="Trama">{{ old('plot') }}</textarea>
		</div>
		<div class="form-group">
			<label for="year">Anno</label>
			<select id="year" name="year">
				@for ($i = 1900; $i <= date("Y") + 1; $i++)
					<option value="{{$i}}" {{ $i == old('year') ? 'selected' : '' }}>{{$i}}</option>
				@endfor
			</select>
		</div>

		<button type="submit">Salva</button>
	</form>
@endsection