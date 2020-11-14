<x-app-layout>
    @section('header', 'Usuarios')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('user.create')}}">
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
            @foreach($users as $user)
                <tr>
                    <td data-label="Nombre">
                        <h4 class="ui image header">
                            <img src="https://via.placeholder.com/150" class="ui mini rounded image">
                            <div class="content">
                                Lena
                                <div class="sub header">{{$user->name . " " . $user->last_name}}</div>
                            </div>
                        </h4>
                    </td>
                    <td data-label="Correo Electrónico">{{$user->email}}</td>
                    <td data-label="Teléfono">{{$user->phone_number}}</td>
                    <td data-label="Fecha Creación">{{$user->created_at}}</td>
                    <td >
                        <div class="ui dropdown">
                            <div class="text">Acción</div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item"><a href="{{route('user.edit', ['id' => $user->id])}}">Modificar</a></div>
                                <div class="item"><a href="{{route('user.create')}}">Crear</a></div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @section('scripts')
        <script>
            $('.dropdown').dropdown({});
        </script>
    @endsection
</x-app-layout>
