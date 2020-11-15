<x-app-layout>
    @section('header', 'Organizaciones')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('organization.create')}}">
                    <i class="fas fa-plus"></i> Crear
                </a>
            </div>
        </div>
    @endsection
    <table class="ui striped table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha de Creación</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($organizations as $organization)
            <tr>
                <td data-label="Nombre">
                    <h4 class="ui image header">
                        <img src="https://via.placeholder.com/150" class="ui mini rounded image">
                        <div class="content">
                            Lena
                            <div class="sub header">{{$organization->name}}</div>
                        </div>
                    </h4>
                </td>
                <td data-label="Email">{{$organization->email}}</td>
                <td data-label="Phone">{{$organization->phone_number_one}}</td>
                <td data-label="Job">{{$organization->created_at}}</td>
                <td>
                    <div class="ui dropdown">
                        <div class="text">Acción</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item"><a href="{{route('organization.edit', ['id' => $organization->id])}}">Modificar</a></div>
                            <div class="item"><a href="{{route('member.index', ['id' => $organization->id])}}">Miembros</a></div>
                            <div class="item"><a href="{{route('event.index', ['id' => $organization->id])}}">Eventos</a></div>
                            <div class="item"><a href="{{route('volunteer.index', ['id' => $organization->id])}}">Voluntarios</a></div>
                            <div class="item"><a href="{{route('post.index', ['id' => $organization->id])}}">Publicaciones</a></div>
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
