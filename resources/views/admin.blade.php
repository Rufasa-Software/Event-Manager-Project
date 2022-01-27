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
    <div class="d-grid gap-2 col-6 mx-auto">
        {{-- <button class="btn btn-primary" type="button">Crear nuevo evento</button> --}}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Crear nuevo evento</button>
        <script>
            $('.openBtn').on('click',function(){
                $('.modal-body').load('modal.blade.php',function(){
                    $('#myModal').modal({show:true});
                });
            });
            </script>
        

        <button class="btn btn-primary" type="button">Añadir a destacados</button>

      </div>


</body>
</html>
