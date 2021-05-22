@extends('layouts.main')

@section('pageTitle')
    CREATE
@endsection

@section('content')
<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
   <form action="{{route('movies.store')}}" method="POST" class="form-horizontal">
      @method('POST')
		@csrf
      <div class="form-group">
        <label for="Titolo" class="col-sm-2 control-label">TITOLO</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="Titolo" placeholder="Titolo del film" value="{{old('title')}}">
        </div>
      </div>
      <div class="form-group">
         <label for="Regista" class="col-sm-2 control-label">REGISTA</label>
         <div class="col-sm-10">
           <input name="movie_director" type="text" class="form-control" id="Regista" placeholder="Regista" value="{{old('movie_director')}}">
         </div>
       </div>
       <div class="form-group">
         <label for="Genere" class="col-sm-2 control-label">GENERE</label>
         <div class="col-sm-10">
           <input name="genres" type="text" class="form-control" id="Genere" placeholder="Genere" value="{{old('genre')}}">
         </div>
       </div>
       <div class="form-group">
         <label for="Trama" class="col-sm-2 control-label">TRAMA</label>
         <div class="col-sm-10">
            <textarea name="plot" id="Trama" cols="30" rows="10" class="form-control" placeholder="Trama">{{old('plot')}}"</textarea>
         </div>
       </div>
       <div class="form-group">
         <label for="anno" class="col-sm-2 control-label">ANNO</label>
         <div class="col-sm-10">
            <select name="year" id="anno" class="form-control">
               @for ($i = 1900; $i < date("Y") + 1; $i++)
               <option value="{{$i}}" {{$i == old('year') ? 'selected' : ''}}>{{$i}}</option>
               @endfor
               
            </select>
         </div>
       </div>
      <div class="form-group text-center">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">aggiungi film</button>
        </div>
      </div>
    </form>
</div>

@endsection