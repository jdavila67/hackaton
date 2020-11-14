<x-app-layout>
    @section('header', 'Eventos')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('organization')}}">
                    Regresar
                </a>
                <a class="ui button primary" href="{{route('event.create', ['id' => $id])}}">
                    <i class="fas fa-plus"></i> Crear
                </a>
            </div>
        </div>
    @endsection
    <table class="ui striped table">
        <thead>
        <tr>
            <th>Evento</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Desde</th>
            <th>Hasta</th>
            <th>Localización</th>
            <th>Disponible</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>
                <td data-label="Nombre">
                    <h4 class="ui image header">
                        <img src="https://via.placeholder.com/150" class="ui mini rounded image">
                        <div class="content">
                            Lena
                            <div class="sub header">{{$event->title}}</div>
                        </div>
                    </h4>
                </td>
                <td data-label="Email">{{Str::substr($event->event_desc,0,30)}}</td>
                <td data-label="Phone">{{$event->event_date}}</td>
                <td data-label="Job">{{$event->event_time_from}}</td>
                <td data-label="Job">{{$event->event_time_to}}</td>
                <td data-label="Job">{{$event->event_location}}</td>
                <td data-label="Job">{{$event->is_active = 1 ? "SI" : "NO"}}</td>
                <td>
                    <div class="ui dropdown">
                        <div class="text">Acción</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item"><a href="{{route('event.edit', ['id' => $event->id, 'org' => $id])}}">Modificar</a></div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @section('scripts')
        <script>
            $('.ui .dropdown').dropdown();
        </script>
    @endsection
</x-app-layout>
