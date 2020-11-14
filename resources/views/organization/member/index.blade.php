<x-app-layout>
    @section('header', 'Miembros')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('organization')}}">
                    Regresar
                </a>
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
            <th>Role</th>
            <th>Fecha de Creación</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($members as $member)
            <tr>
                <td data-label="Nombre">
                    <h4 class="ui image header">
                        <img src="https://via.placeholder.com/150" class="ui mini rounded image">
                        <div class="content">
                            Lena
                            <div class="sub header">{{$member->name}}</div>
                        </div>
                    </h4>
                </td>
                <td data-label="Email">{{$member->role}}</td>
                <td data-label="Job">{{$member->created_at}}</td>
                <td>
                    <div class="ui dropdown">
                        <div class="text">Acción</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item"><a href="{{route('member.edit', ['org' => $member->org_id, 'id' => $member->id])}}">Modificar</a></div>
                            <div class="item"><a href="{{route('organization.edit', ['org' => $member->org_id, 'id' => $member->id])}}">Eliminar</a></div>
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
