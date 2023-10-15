<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('/vendor/translation/css/main.css') }}">
    <link href="{{ asset('/vendor/translation/fontawesome-free-6.2.1-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/translation/fontawesome-free-6.2.1-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/translation/fontawesome-free-6.2.1-web/css/solid.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
        
        @include('translation::nav')
        @include('translation::notifications')
        
        @yield('body')
        
    </div>
    
    <script src="{{ asset('/vendor/translation/js/app.js') }}"></script>
</body>
</html>
