<table class="table table-dark table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">event_name</th>
        <th scope="col">event_date</th>
        <th scope="col">event_image</th>
        <th scope="col">event_capacity</th>
      </tr>

    </thead>
    <tbody>
      @foreach ($events as $event)
      <tr>
          <td>{{$event->event_name}}</td>
          <td>{{$event->event_date}}</td>
          <td>{{$event->event_image}}</td>
          <td>{{$event->event_capacity}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>