<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Manager Event</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <x-header></x-header>
    <form action="/admin" method="POST" class="d-flex justify-content-center">
        <x-modal>
            @csrf
        </x-modal> 
    </form>
    <x-footer/>
</body>
</html>
