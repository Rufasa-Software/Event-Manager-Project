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
    <x-header/>
    <div class="d-flex justify-content-center mb-5">
        <button class="btnEvento" type="button"><a id="link_admin" href="{{ route('admin.create')}}">Crear nuevo evento</a></button>
    </div>
    <div class="section-cards">
        @foreach ($events as $event)
            <x-card-component :event="$event"/>  
        @endforeach

        <div style="width: 50%; margin: 0 auto;">
            {{ $events->links() }}
        </div>
    </div>
    

    <div>
        <button class="btnDestacados text-white" type="button">Añadir a destacados</button>
    </div>
    <x-footer/>
    <script src="../js/app.js"></script>   
</body>    
</html>
