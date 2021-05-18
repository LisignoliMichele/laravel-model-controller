{{-- importo la struttura --}}
@extends('movies.layouts.main')

@section('pageTitle')
	Modifica film: {{$movie->title}}
@endsection

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

	<form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="cover_image">Immagine Cover</label>
			<img src="{{$movie->cover}}" alt="" style="width: 100px">
			<input type="text" id="cover_image" name="cover" placeholder="URL Immagine" value="{{old('cover_image') ? old('cover_image') : $movie->cover_image}}">
		</div>
		<div class="form-group">
			<label for="title">Titolo</label>
			<input type="text" id="title" name="title" placeholder="Titolo" value="{{old('title') ? old('title') : $movie->title}}">
		</div>
		<div class="form-group">
			<label for="film_director">Regista</label>
			<input type="text" id="film_director" name="film_director" placeholder="Regista" value="{{old('film_director') ? old('film_director') : $movie->film_director}}">
		</div>
		<div class="form-group">
			<label for="genres">Generi</label>
			<input type="text" id="genres" name="genres" placeholder="Generi" value="{{old('genres') ? old('genres') : $movie->genres}}">
		</div>
		<div class="form-group">
			<label for="plot">Trama</label>
			<textarea id="plot" name="plot" rows="8" placeholder="Trama...">{{old('plot') ? old('plot') : $movie->plot}}</textarea>
		</div>
		<div class="form-group">
			<label for="year">Anno</label>
			<select id="year" name="year">
				@for ($i = 1900; $i <= date("Y") + 1; $i++)
					<option value="{{$i}}" {{ old('year') == $i || $movie->year == $i ? 'selected' : '' }}>{{$i}}</option>
				@endfor
			</select>
		</div>

		<button type="submit">Salva</button>
	</form>
@endsection