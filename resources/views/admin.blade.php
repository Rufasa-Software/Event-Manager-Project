<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Event Manager</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="d-flex justify-content-center">
        <div>
                <button class="btnEvento" type="button"><a id="link_admin" href='/modal'>Crear nuevo evento</a></button>
        </div>
    </div>
    <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Check">
            <label class="form-check-label" for="Check"></label>
    </div>

    <div class="d-flex justify-content-end">
        <div>
                <button class="btnDestacados text-white" type="button">Añadir a destacados</button>
        </div>
    </div>    
    </body>
</html>
