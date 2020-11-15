<x-app-layout>
    @section('header', 'Voluntarios')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('organization')}}">
                    Regresar
                </a>
                <a class="ui button primary" href="{{route('volunteer.create', ['id' => $id])}}">
                    <i class="fas fa-plus"></i> Crear
                </a>
            </div>
        </div>
    @endsection
    <table class="ui striped table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Numero de teléfono</th>
            <th>Email</th>
            <th>Miembro Desde</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($volunteers as $volunteer)
            <tr>
                <td data-label="Nombre">
                    <h4 class="ui image header">
                        <img src="https://via.placeholder.com/150" class="ui mini rounded image">
                        <div class="content">
                            <div class="sub header">{{$volunteer->name}}</div>
                        </div>
                    </h4>
                </td>
                <td data-label="Numero de teléfono">{{$volunteer->phone_number}}</td>
                <td data-label="Email">{{$volunteer->email}}</td>
                <td data-label="Miembro Desde">{{$volunteer->created_at}}</td>
                <td>
                    <div class="ui dropdown">
                        <div class="text">Acción</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item"><a href="{{route('volunteer.edit', ['org' => $volunteer->org_id, 'id' => $volunteer->id])}}">Modificar</a></div>
                            <div class="item"><a href="#" onclick="_delete('{{$volunteer->id}}')">Eliminar</a></div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="ui mini modal">
        <div class="ui icon header">
            <i class="Trash icon"></i>
            Eliminar Voluntario
        </div>
        <div class="content">
            <p>¿Estás seguro de que quieres eleminar este voluntario?</p>
        </div>
        <div class="actions">
            <div class="ui red cancel button">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green ok button">
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            $('.ui .dropdown').dropdown();

            function _delete(id) {
                $('.ui.mini.modal') .modal('show');
            }
        </script>
    @endsection
</x-app-layout>
