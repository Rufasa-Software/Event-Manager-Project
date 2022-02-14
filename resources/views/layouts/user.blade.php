<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Event Manager</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
</head>
<body>
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif

        @else
            <x-header> 
                <ul class="nav nav-pills">
                    <li id="events" class="nav-item fs-2"><a href="{{ route('index') }}" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Events</a></li>
                </ul>
            </x-header>

            <x-my-profile/>

            <main>           
                <div class="section-cards">
                    @foreach ($sorted as $event)
                        <x-card-component :event="$event"/>  
                    @endforeach   
                </div>                   
            </main>
    @endguest
    
    <x-footer/>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
    
</html>
