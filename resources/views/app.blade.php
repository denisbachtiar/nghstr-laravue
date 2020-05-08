<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="{{ asset('/fontawesome/css/all.min.css') }}" rel="stylesheet">
    </head>
    <body>
       <div id="app">
            <home-component></home-component>
       </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    </body>
</html>
