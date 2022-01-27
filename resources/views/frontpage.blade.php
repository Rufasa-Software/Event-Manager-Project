<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portada</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <x-header></x-header>
    <x-footer/>
   
    <main>
        <x-tabs-component />
    </main>
    <script src="../js/app.js"></script>
</body>
</html>