<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Event Manager Edit</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <x-header/>
  <main>
    <form action="/admin/{{$event->id}}" method="POST" class="d-flex justify-content-center">
      <x-modal>
        @csrf    
        @method('PUT')
      </x-modal>
    </form>
  </main>
  <x-footer/>
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>