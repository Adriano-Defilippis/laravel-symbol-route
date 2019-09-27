<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $type }} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>
      <header class= 'bg_col_{{ $bg_col }} '>
        @include('component.header')
      </header>

     <div class="container">

       <h1>Hi, I am route: cube/{{ $type }}</h1>
       <div class="wrapper_box">
         @yield('section_num')
         @yield('section_word')
       </div>

     </div>

     <footer>
       @include('component.footer')
     </footer>

    </body>
</html>
