<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- google font --}}
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      {{-- fontawesome --}}
      @yield('fontawesome')
      {{-- placeholder  titolo: --}}
      <title>@yield('pageTitle')</title>
   </head>
   <body>
   {{-- inclusa la struttura --}}
   @include('movies.partials.header')
      <main>
         {{-- aggiunto lo yeld(come placeholder) del contenuto della struttura --}}
         @yield('content')
      </main>
      <script src="https://unpkg.com/vue"></script>
      <script src="https://unpkg.com/vue-dragscroll"></script>
   </body>
</html>