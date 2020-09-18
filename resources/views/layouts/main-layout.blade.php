<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Pasta Laravel</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>

      <div class="container">

        @include('partials.header')
        <main>

          @yield('content')

        </main>

        @include('partials.footer')

      </div>

    </body>
</html>
