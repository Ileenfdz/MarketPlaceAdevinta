<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Market place</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <x-header/>
    <div class="container d-flex flex-wrap justify-content-center gap-4 py-4">
        @foreach ($ads as $ad)
            <x-card :ad="$ad"/>  
        @endforeach
    </div>
    <x-info-card/>
    <x-footer/>
</body>
</html>