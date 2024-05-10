<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TASTY FOOD</title>
    <link
      rel="stylesheet"
      href="{{ url('/vendor/bootstrap-5.3.1-dist/css/bootstrap.min.css') }}"
    />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  </head>
  <body class="overflow-x-hidden">
    
    @if(Request::path() === '/')
      @include('layouts.header')
    @else 
      @include('layouts.jumbotron')
    @endif
    @section('main')
    @show
    @include('layouts.footer')
    <script src="{{ url('/vendor/bootstrap-5.3.1-dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{!! asset('/js/script.js') !!}"></script>
  </body>
</html>