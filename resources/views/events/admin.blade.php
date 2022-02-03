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
    <div class="d-flex justify-content-center">
        <div>
            <button class="btnEvento" type="button"><a id="link_admin" href="admin/create">Crear nuevo evento</a></button>
        </div>
    </div>
    <div class="mb-3 form-check color-white">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" id="check_icon" for="Check"></label>
    </div>

    <table class="table table-dark table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">event_name</th>
            <th scope="col">event_date</th>
            <th scope="col">event_description</th>
            <th scope="col">event_image</th>
            <th scope="col">event_capacity</th>
            <th scope="col"></th>
          </tr>
        </thead>

        <tbody>
         @foreach ($events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->event_name}}</td>
                <td>{{$event->event_date}}</td>
                <td>{{$event->event_description}}</td>
                <td>{{$event->event_image}}</td>
                <td>{{$event->event_capacity}}</td>
                <td>
                    <div class="icons_group">
                        <form action="{{ route('admin.destroy', $event->id) }}" method="POST">
                            <a href="/admin/edit/{{$event->id}}" class="far fa-edit"></a>         
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="far fa-trash-alt"></button>
                        </form>
                    </div>
                </td>
            </tr>
         @endforeach
        </tbody>
    </table>

    <div>
        <button class="btnDestacados m-0 text-white" type="button">Añadir a destacados</button>
    </div>
    <x-footer/>
    </body>
</html>
